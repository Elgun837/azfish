import React from 'react'
import footerImg from '/images/footer-lead.png'
import './footer.css'
import underSea from '/images/undersea.svg'

export default function Footer() {
  return (
    <>
    
    <section className='subscribe_section'>
        <div className='subscribes container'>
            <div className='left-sub col'>
                <h5>Subscribe to the newsletter from Azerbaijan Fish Farm</h5>
                <p>1 email per week with updates on marketing, support and sales</p>
                <div className='sub_mail'>

                </div>
                <div className='social_media_section'>

                </div>
            </div>
            <div className='right-sub col'>
                <img className='img-fluid' src={footerImg}/>
            </div>
        </div>
    </section>
    <section className='footer-bottom container'>
        <div className='footer-col col'></div>
        <div className='footer-col col'></div>
        <div className='footer-col col'></div>
        <div className='footer-col col'></div>
        <div className='footer-col col'></div>
    </section>
    <section className='footer-bottom' >
        <img className='img-fluid w-100' src={underSea} />
    </section>
    
    </>
  )
}
