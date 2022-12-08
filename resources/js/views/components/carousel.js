import Carousel from 'react-bootstrap/Carousel';
import SlideImg1 from '/images/main-image.jpg';
import SlideImg2 from '/images/main-image2.jpg';
import  "./carousel.css";

function MainCarousel (){
    return (
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
    )
}

export default MainCarousel