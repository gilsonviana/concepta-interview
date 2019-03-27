import React from 'react'
import Carousel from './Carousel'

const TicketListItem = ({ data }) => (
	<div className="ticket-list__details__item">												
		<Carousel photos={data.Photos} />
		<h3 className="ticket-list__details__item__name">{data.Name}</h3>
	</div>
)

export default TicketListItem