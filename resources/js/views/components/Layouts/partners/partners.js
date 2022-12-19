import Carousel from 'react-bootstrap/Carousel';

import { useEffect, useState } from 'react';

export default function Partners() {
    const [data, setData] = useState([]);

    const [refresh, setRefresh] = useState(false);
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
            <Carousel className="partner-slider" keyboard={false} pauseOnHover={true}>

                {data.map((partners, i) => {
                    <Carousel.Item key={i}>
                        <img
                            className="d-block w-100"
                            src={`/storage/${partners.image}`}
                            alt="First slide"
                        />


                    </Carousel.Item>
                }

                )}

            </Carousel>
            </div>
        </>


    )
}
