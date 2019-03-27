<?php
/*
 Plugin Name: Ticket List
 Description: Display a list of tickets
 Version: 0.0.1
 Author: Gilson Viana
 */

defined( 'ABSPATH' ) or die( 'Access Denied' );

header( 'Access-Control-Allow-Origin: *' );

if ( !function_exists( 'ticket_list_init' ) ) {

    function ticket_list_init() {
        
        /*
        * Renders HTML on the screen
        */
        function render() {
            return '<div id="ticket-list"></div>';
        }
        add_shortcode( 'ticket-list', 'render' );
        
        /*
        * Create endpoints for Ticket List API
        */
        function ticket_list_routes() {
            if($_SERVER['REQUEST_METHOD'] === 'GET') {
                register_rest_route('/api', '/tickets', array(
                    'method'    => 'GET',
                    'callback'  => 'handle_api_tickets_request'
                ));
            }
        }        
        add_action( 'rest_api_init', 'ticket_list_routes' );
        
        /**
         * Handle GET requests to api/tickets route
         */
        function handle_api_tickets_request() {
            $date_from = date( 'm/d/Y' );
            $url = 'http://travellogix.api.test.conceptsol.com/api/Ticket/Search';	
            $authorization = ticket_list_get_authorization( 'http://travellogix.api.test.conceptsol.com/Token', 'grant_type=password&username=test1%40test2.com&password=Aa234567%21');	
            $body = array(
                'Language'      => 'ENG',
                'Currency'      => 'USD',
                'destination'   => 'MCO',
                'DateFrom'      => $date_from,
                'DateTo'        => date('m/d/Y', strtotime("$date_from +1 day")),
                'Occupancy'     => array(
                    'AdultCount'    => 1,
                    'ChildCount'    => 1,
                    'ChildAges'     => array(10)
                )
            );
            $body_json = json_encode( $body );

            $request = wp_remote_request( esc_url_raw( $url ) , array(
                'method'    => 'POST',
                'headers'   => array(
                    'Content-Type'  => 'application/json',
                    'Authorization' => $authorization
                ),
                'body'      => $body_json
            ) );

            $response_body = json_decode( wp_remote_retrieve_body( $request ) );

            $data = [];

            $data['code'] = $response_body->Code;
            
            foreach($response_body->Result as $key => $value) {
		        $data['result'][$key]['Destination'] = $value->TicketInfo->Destination->Code;
		        $data['result'][$key]['Name'] = $value->TicketInfo->Name;
                for($i = 0; $i < count($value->TicketInfo->ImageList); $i++) {
                    if ($value->TicketInfo->ImageList[$i]->Type === 'S') {
                        $data['result'][$key]['Photos'][] = $value->TicketInfo->ImageList[$i];
                    }
                }
            }

            return $data;
        }        

        /**
         * Obtain authorization.
         * 
         * @param String $url
         * @param String $raw
         */
        function ticket_list_get_authorization( $url, $raw ) {                        
            $authorization_request = wp_remote_post( esc_url_raw( $url ), array(
                'body' => $raw
            ));
            $response = json_decode( wp_remote_retrieve_body( $authorization_request ) );
            $token_type = $response->token_type;
            $bearer = $token_type . ' ' . $response->access_token;
            return $bearer;
        }

        /**
         * Enqueue necessary scripts
         */
        function ticket_list_scripts() {                        
            wp_enqueue_style( 'ticket-list-style', plugin_dir_url( __FILE__ ) . 'ticket-list-style.css' );
            wp_enqueue_script( 'react', plugin_dir_url( __FILE__ ) . 'react/node_modules/react/umd/react.development.js', array(), false, true );                        
            wp_enqueue_script( 'react-app', plugin_dir_url( __FILE__ ) . 'react/dist/main.js', array(), false, true );
            
            wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Lato|PT+Serif:400,700');
        }
        add_action( 'wp_enqueue_scripts', 'ticket_list_scripts' );
    }
}
ticket_list_init();