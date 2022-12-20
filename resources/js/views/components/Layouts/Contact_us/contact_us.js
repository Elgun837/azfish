import React from 'react'
import './contact.css'
import testImg from '/images/lead-bg-2.jpg'
import testImg2 from '/images/lead-bg-1.jpg'
import { useEffect, useState } from 'react';
import { Swiper, SwiperSlide } from 'swiper/react';
import rigthSlide from "/images/right-slide.svg"
import leftSlide from "/images/left-slide.svg"
import SwiperCore, {Pagination, Navigation, Autoplay} from 'swiper';

export default function Contact_us() {

    const [data, setData] = useState([]);
    const [refresh, setRefresh] = useState(false);
    const [swiper, setSwiper] = React.useState(null);
    const next = () => {
        swiper.slideNext();
    };
    const back = () => {
        swiper.slidePrev();
    };
    const settings = {
        dots: false
    };
    SwiperCore.use([Navigation, Pagination, Autoplay])

    return (



        <>
            <div className="contact-us">

                <div className="left-side-contact col">
                    <div className="absolute-slide">
                        <Swiper
                            
                            slidesPerView={1}
                            loop={true}
                            navigation= {
                                true
                              }
                            autoplay={{
                                delay: 2500,
                                disableOnInteraction: false,
                              }}
                              onSwiper={(s) => {
                    
                                setSwiper(s);
                              }}
                            
                            
                        >


                            <SwiperSlide> <img className='img-fluid' src={testImg} /></SwiperSlide>
                            <SwiperSlide> <img className='img-fluid' src={testImg2} /></SwiperSlide>
                           


                           

                        </Swiper>
                    </div>
                </div>
                <div className="right-side-contact col">
                    <div className="mail-section">
                        <h2 className="mailer-header">We'll help you
                            choose!</h2>
                        <p className="mailer-description">
                            Join us in making nutritious seafood accessible to all. Our experts can consult you with choice variations and make the best to get the most suitable products to your preference.
                        </p>
                        <form className="contact_form" >
                            <input type="text" name="name" placeholder='Name, Surname' required />
                            <input type="email" name='email' placeholder='Email adress' required />
                            <input type="number" name='phone' placeholder='Phone' required />
                            <input type="text" name="company" placeholder='Company name' required />
                            <textarea name="message" rows="7" placeholder='Your Messages' required></textarea>
                            <button type='submit' className='btn btn-primary'>Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </>
    )
}
