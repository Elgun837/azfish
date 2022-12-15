import React from 'react'
import { Swiper, SwiperSlide } from 'swiper/react';
import brandLogo1 from "/images/kura_caviar.png"
import brandLogo2 from "/images/baku-caviar.png"
import 'swiper/css';

export default function BrandSlider() {

    const settings = {
        dots: false
    };
    return (
        <>
            <Swiper className='width-70'
                spaceBetween={35}
                slidesPerView={2}
                
            >
                <SwiperSlide><img className='p-5' src={brandLogo1} /></SwiperSlide>
                <SwiperSlide><img className='p-5' src={brandLogo2} /></SwiperSlide>
                <SwiperSlide><img className='p-5' src={brandLogo1} /></SwiperSlide>
                <SwiperSlide><img className='p-5' src={brandLogo2} /></SwiperSlide>
               
            
            </Swiper>


        </>
    )
}
