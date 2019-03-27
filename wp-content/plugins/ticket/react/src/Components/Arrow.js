import React from 'react'
import PropTypes from 'prop-types'

const Arrow = ({ direction, handleClick, glyph }) => (
    <span className={`carousel-arrow-${direction}`} onClick={handleClick}>
        <span className="carousel-glyph">{glyph}</span>
    </span>
)

Arrow.propTypes = {
    direction: PropTypes.string,
    handleClick: PropTypes.func,
    glyph: PropTypes.string
}

export default Arrow