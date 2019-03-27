import React, {useState, useEffect} from 'react';
import axios from 'axios';

import TicketListItem from './TicketListItem'

const TicketList = () => {
	const [data, setData] = useState({code: null, tickets: []})

	useEffect(() => {
		const fetchData = async () => {
			const result = await axios('http://localhost/concepta-test/wp-json/api/tickets')

			setData({ code: result.data.code, tickets: result.data.result })			
		}		

		fetchData()
	})

	return(
		<React.Fragment>
			<h1>Showing results for "MCO"</h1>
			{
				data.tickets.map((ticket, index) => <TicketListItem key={index} code={data.code} data={ticket} />)
			}				
		</React.Fragment>
	)
}

export default TicketList