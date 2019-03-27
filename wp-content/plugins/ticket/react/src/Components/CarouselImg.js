import React from 'react'
import PropTypes from 'prop-types'

const CarouselImg = ({ photo }) => (
    <img className="carousel-img" src={photo.Url} alt={photo.Description}/>
)

CarouselImg.propTypes = {
    photo: PropTypes.shape({
        Description: PropTypes.string,
        Order: PropTypes.number,
        Type: PropTypes.string,
        Url: PropTypes.string,
        VisualizationOrder: PropTypes.string
    })
}

export default CarouselImg