import React from 'react'
import { Swiper, SwiperSlide } from 'swiper/react';
import brandLogo1 from "/images/kura_caviar.png"
import brandLogo2 from "/images/baku-caviar.png"
import rigthSlide from "/images/right-slide.svg"
import leftSlide from "/images/left-slide.svg"

import 'swiper/css';

export default function BrandSlider() {

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
    return (
        <>
            <Swiper className='width-70'
                spaceBetween={35}
                slidesPerView={2}
                loop={true}
                navigation={true}
                onSwiper={(s) => {
                    
                    setSwiper(s);
                  }}
            >
                <SwiperSlide><img className='p-5' src={brandLogo1} /></SwiperSlide>
                <SwiperSlide><img className='p-5' src={brandLogo2} /></SwiperSlide>
                <SwiperSlide><img className='p-5' src={brandLogo1} /></SwiperSlide>
                <SwiperSlide><img className='p-5' src={brandLogo2} /></SwiperSlide>
               
                <div className='slider-button-container d-flex justify-content-center pt-4'>
                <button className='slide-cont' onClick={back}><img  src={leftSlide} /></button>
                <button className='slide-cont' onClick={next}><img  src={rigthSlide} /></button>
                </div>
                
            </Swiper>


        </>
    )
}
