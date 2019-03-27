import React from 'react'

const CarouselImg = ({ photo }) => (
    <img className="carousel-img" src={photo.Url} alt={photo.Description}/>
)

export default CarouselImg