import React from 'react'
import aboutImg from "/images/about-img.jpg"
import './about.css'
import fishIcon from "/images/fish-icon-fav.svg"
import verifyIcon from "/images/verify.svg"
import uniLogo1 from "/images/uni1.svg" 
import uniLogo2 from "/images/uni2.svg" 

export default function About() {
  return (
    <>
      <div className='container about-section'>
        <div className="about-row">
          <div className='left-box '>
            <img src={aboutImg} />
          </div>
          <div className='right-box '>
            <div className='text-box-1 mb-5'>
              <div className='header-row'>
                <div className='header-box'>
                  <img className='svg-img' src={fishIcon} alt="svg" />
                  <h2>About us</h2>
                </div>
                <p className='body-text'>
                  Azerbaijan Fish Farm LLC is the pioneer of sustainable and progressive fish breeding and caviar production in Azerbaijan.<br />
                  For us, this is not just a job, but an important mission. While farming fish, we are also looking for ways to protect the marine ecosystem.
                </p>

              </div>
            </div>
            <div className='text-box-2'>
              <div className='foot-row'>
                <div className='foot-box'>
                  <h3 className='about-h3'>Company policy</h3>
                  <img className='svg-img' src={verifyIcon} alt="svg" />
                </div>
                <p className='body-text'>
                Environmental safety and human health are the keywords of our company policy. On the fish farms we have created, we only help nature - we breed valuable fish species in conditions that are as close to natural as possible.<br /><br />
                We cooperate with international Blue Marine Foundation and help to protect spawning ground in Kura and Araz rivers. We also help to develop a strategy to reduce harvesting of wild sturgeon and salmon.
                </p>
                <div className='uni-logo-box'>
                <img src={uniLogo2} />
                <hr className='horizontal-divider-uni'/>
                <img src={uniLogo1} />
                </div>
                <button className='learn-button'>Learn more</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  )
}
