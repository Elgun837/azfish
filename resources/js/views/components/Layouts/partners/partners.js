import { Swiper, SwiperSlide } from 'swiper/react';
import SwiperCore, {Pagination, Navigation, Autoplay} from 'swiper';
import React from 'react';
import { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import "./partners.css"
import 'swiper/css/pagination';

SwiperCore.use([Navigation, Pagination, Autoplay])
export default function Partners() {
    const [data, setData] = useState([]);
    const [refresh, setRefresh] = useState(false);
    const [swiper, setSwiper] = React.useState(null);
   
   
    
    useEffect(() => {
        axios.get(`/api/partners`, {

        })
            .then((res) => {


                setData(res.data.data)



            })
            .catch(e => console.log(e));
    }, [refresh]);

    console.log(data)
    return (
        <>
        <div className='partners container'>
        <Swiper  className='partners-slide'
                spaceBetween={15}
                slidesPerView={5}
                loop={true}
                pagination={true}
                autoplay={{
                    delay: 2500,
                    disableOnInteraction: false,
                  }}
                onSwiper={(s) => {
                    
                    setSwiper(s);
                  }}
            >
                {
                 data.map((partners, i) => (
                <SwiperSlide key={i}><Link to={partners.link}> <img className='img-fluid p-5' src={`/storage/${partners.image}`} /></Link></SwiperSlide>
                
                
                ))
                }
                
                
            </Swiper>
            </div>
        </>


    )
}
