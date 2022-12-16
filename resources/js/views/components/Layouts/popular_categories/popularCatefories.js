import React from 'react'
import fishIcon from "/images/fish-icon-fav.svg"
import "./pop.css"
import { Link } from 'react-router-dom'

export default function popularCatefories() {
    return (
        <div className="pop_cat-section">
            <div className='header-box justify-content-center'>
                <img className='svg-img' src={fishIcon} alt="svg" />
                <h2>Popular Categories</h2>
            </div>
            <Link to="">Get to know all our categories of products -></Link>

        </div>
    )
}
