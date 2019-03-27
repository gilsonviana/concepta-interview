import { useState } from 'react'
import PropTypes from 'prop-types'

import Arrow from './Arrow';
import CarouselImg from './CarouselImg'

const Carousel = ({ photos }) => {
    const [currentIndex, setCurrentIndex] = useState(0)
    
    const previousImg = () => {
        if (currentIndex > 0) return setCurrentIndex(currentIndex - 1)
    }

    const nextImg = () => {
        if (currentIndex != photos.lenght || currentIndex < photos.lenght) return setCurrentIndex(currentIndex + 1)              
    }

    return(
        <div className="ticket-list__details__item__photos">			
            <Arrow direction="left" handleClick={previousImg} glyph="&#9664;"/>
            <CarouselImg photo={photos[currentIndex]} />
            <Arrow direction="right" handleClick={nextImg} glyph="&#9654;"/>
		</div>
    )
}

Carousel.propTypes = {
    photos: PropTypes.arrayOf(PropTypes.object)
}

export default Carousel