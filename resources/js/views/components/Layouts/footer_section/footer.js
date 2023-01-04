import React from 'react'
import footerImg from '/images/footer-lead.png'
import './footer.css'
import underSea from '/images/undersea.svg'
import youtubeSvg from '/images/byoutube.svg'
import facebookSvg from '/images/bfacebook.svg'
import googleSvg from '/images/bgoogle.svg'
import instagramSvg from '/images/binstagram.svg'
export default function Footer() {
    return (
        <>

            <section className='subscribe_section'>
                <div className='subscribes container'>
                    <div className='left-sub col'>
                        <h5 className='blue-heading'>Subscribe to the newsletter from Azerbaijan Fish Farm</h5>
                        <p>1 email per week with updates on marketing, support and sales</p>
                        <div className='sub_mail'>
                            <form id='subscribe-form'>
                                <input
                                    type="search"
                                    className='sub-input'
                                    name="s"
                                    id="s"
                                    placeholder="Enter your email Address"
                                />

                                <button type="submit" id="subscribe-button">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                        <div className='footer-social'>
                            <ul className='footer-social-share'>
                                <li><img src={facebookSvg} /></li>
                                <li><img src={instagramSvg} /></li>
                                <li><img src={youtubeSvg} /></li>
                                <li><img src={googleSvg} /></li>
                            </ul>
                            <p>Join the community.<br/>
With us already 5500+</p>
                        </div>
                    </div>
                    <div className='right-sub col'>
                        <img className='img-fluid' src={footerImg} />
                    </div>
                </div>
            </section>
            <section className='footer-bottom container'>
                <div className='footer-col col'>
                    <h5 className='nav-header'>About us</h5>
                    <ul>
                        <li>We are today</li>
                        <li>Mission and values</li>
                        <li>Retail</li>
                        <li>Contacts</li>
                        <li>Feedback</li>
                    </ul>
                </div>
                <div className='footer-col col'>
                    <h5 className='nav-header'>Brands & products</h5>
                    <ul>
                        <li>We are today</li>
                        <li>Mission and values</li>
                        <li>Retail</li>
                        <li>Contacts</li>
                        <li>Feedback</li>
                    </ul>
                </div>
                <div className='footer-col col'>
                    <h5 className='nav-header'>Sustainability</h5>
                    <ul>
                        <li>We are today</li>
                        <li>Mission and values</li>
                        <li>Retail</li>
                        <li>Contacts</li>
                        <li>Feedback</li>
                    </ul>
                </div>
                <div className='footer-col col'>
                    <h5 className='nav-header'>Production</h5>
                    <ul>
                        <li>We are today</li>
                        <li>Mission and values</li>
                        <li>Retail</li>
                        <li>Contacts</li>
                        <li>Feedback</li>
                    </ul>
                </div>
                <div className='footer-col col'>
                    <h5 className='nav-header'>Contact</h5>
                    <ul>
                        <li>We are today</li>
                        <li>Mission and values</li>
                        <li>Retail</li>
                        <li>Contacts</li>
                        <li>Feedback</li>
                    </ul>
                </div>

            </section>
            <section className='footer-bottom' >
                <img className='img-fluid w-100' src={underSea} />
            </section>

        </>
    )
}
