import React from 'react'

const Arrow = ({ direction, handleClick, glyph }) => (
    <span className={`carousel-arrow-${direction}`} onClick={handleClick}>
        <span className="carousel-glyph">{glyph}</span>
    </span>
)

export default Arrow