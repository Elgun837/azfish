import Carousel from 'react-bootstrap/Carousel';
import SlideImg1 from '/images/main-image.jpg';
import SlideImg2 from '/images/main-image2.jpg';
import "./carousel.css";
import { useEffect } from 'react';

function MainCarousel() {

  useEffect(() => {
    axios.get(`/api/slider`, {

    }).then((res) => {
      console.log(res)
    })
      .catch(e => console.log(e));
  });


  return (

    <>
      <Carousel>
        <Carousel.Item>
          <img
            className="d-block w-100"
            src={SlideImg1}
            alt="First slide"
          />
          <Carousel.Caption>
            <h3>First slide label</h3>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </Carousel.Caption>
        </Carousel.Item>
        <Carousel.Item>
          <img
            className="d-block w-100"
            src={SlideImg2}
            alt="Second slide"
          />

          <Carousel.Caption>
            <h3>Second slide label</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </Carousel.Caption>
        </Carousel.Item>

      </Carousel>

      <svg className='bottom-svg'  width="100%" height="64" viewBox="0 0 1440 44" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0L48 7C96 14 192 28 288 28C384 28 480 14 576 7C672 0 768 0 864 9.31875C960 18.8125 1056 37.1875 1152 42C1248 46.8125 1344 37.1875 1392 32.6812L1440 28V126H1392C1344 126 1248 126 1152 126C1056 126 960 126 864 126C768 126 672 126 576 126C480 126 384 126 288 126C192 126 96 126 48 126H0V0Z" fill="white" />
      </svg>

    </>

  )
}

export default MainCarousel