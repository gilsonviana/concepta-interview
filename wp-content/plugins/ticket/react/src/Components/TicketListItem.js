import React from 'react'
import PropTypes from 'prop-types'

import Carousel from './Carousel'


const TicketListItem = ({ data }) => (
	<div className="ticket-list__details__item">												
		<Carousel photos={data.Photos} />
		<h3 className="ticket-list__details__item__name">{data.Name}</h3>
	</div>
)

TicketListItem.propTypes = {
	data: PropTypes.shape({
		Destination: PropTypes.string,
		Name: PropTypes.string,
		Photos: PropTypes.array
	})
}

export default TicketListItem