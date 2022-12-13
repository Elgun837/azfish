import React from 'react'
import aboutImg from "/images/about-img.jpg"
import './about.css'

export default function About() {
  return (
    <>
        <div className='container about-section'>
            <div className="row">
                <div className='left-box'>
                    <img src={aboutImg} />
                </div>
                <div className='right-box'></div>
            </div>
        </div>
    </>
  )
}
