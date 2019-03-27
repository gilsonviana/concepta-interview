import React, {useState, useEffect} from 'react';
import axios from 'axios';

import TicketListItem from './TicketListItem'

const TicketList = () => {
	const [data, setData] = useState([])

	useEffect(() => {
		const fetchData = async () => {
			const result = await axios('http://localhost/concepta-test/wp-json/api/tickets')

			setData(result.data.result)			
		}		

		fetchData()
	}, [])

	return(
		<React.Fragment>
			<h1>Showing results for "MCO"</h1>
			{
				data.map((ticket, index) => <TicketListItem key={index} data={ticket} />)
			}				
		</React.Fragment>
	)
}

export default TicketList