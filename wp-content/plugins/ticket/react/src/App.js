import React, { Component } from "react";
import TicketList from './Components/TicketList';

export default class App extends Component {
	render() {
		return(
			<div className="ticket-list">
				<TicketList />
			</div>
		)
	}
}