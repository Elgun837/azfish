import React from 'react'
import fishIconWhite from "/images/fish-white.svg"
import "./brands.css"
import rightIcon from "/images/right-white.svg" 



export default function Brands() {
    return (
        <div className="brands">
            <svg className="brands-svg" width="1440" height="71" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1440 71" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 43.0251L41 55.5489C41 55.5489 104.5 72.4344 200.5 70.9016C296.5 69.4764 480 51.6301 576 43.0251C672 34.4201 768 34.42 864 40.1478C960 45.9831 1104 66.3873 1200 66.468C1296 66.3873 1392 55.0932 1440 49.2579V34.42V0H1392C1344 0 1248 0 1152 0C1056 0 960 0 864 0C768 0 672 0 576 0C480 0 384 0 288 0C192 0 48 0 48 0H0V43.0251Z" fill="white" />
            </svg>

            <div className='container brands-section'>
                <div className='rigth-box-brands'>
                    <div className="top-head">
                        <img className='svg-img' src={fishIconWhite} alt="svg" />
                        <h2>About us</h2>
                    </div>
                    <div className="mid-right">
                        <p>
                            Here you can see our brand of caviar.

                            If you want the texture and flavor of best caviar without increasing your ecological footprint, our brands is unbelievably reminiscent — and affordable.
                        </p>
                    </div>
                    <button className='brands-button'>All Brands <img className='btn-svg-img' src={rightIcon} alt="svg" /> </button>
                </div>
                <div className='left-box-brands'>

                </div>

            </div>



        </div>
    )
}

