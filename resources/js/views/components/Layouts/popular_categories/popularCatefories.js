import React from 'react'
import fishIcon from "/images/fish-icon-fav.svg"
import "./pop.css"
import { Link } from 'react-router-dom'
import Container from 'react-bootstrap/Container';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import catImg1 from '/images/fresh-fish.png'
import catImg2 from '/images/ice-fish.png'
import catImg3 from '/images/salted-fish.png'

export default function popularCatefories() {
    return (
        <div className="pop_cat-section container">
           <div className='header-column text-center'>
           <div className='header-box justify-content-center'>
                <img className='svg-img' src={fishIcon} alt="svg" />
                <h2>Popular Categories</h2>
            </div>
            <Link to="">Get to know all our categories of products - </Link>
           </div>
           <Container className='pop-catefory-holder'>
                <Row className='category-holder '>
                    <Col className='category-item'>
                        <Link to="#">
                            <h4>Categroy name</h4>
                            <img className='category-img img-fluid' src={catImg1} />
                        </Link>
                    </Col>
                    <Col className='category-item '>
                        <Link to="#">
                            <h4>Categroy name</h4>
                            <img className='category-img img-fluid' src={catImg2} />
                        </Link>
                    </Col>
                    <Col className='category-item'>
                        <Link to="#">
                            <h4>Categroy name</h4>
                            <img className='category-img img-fluid' src={catImg3} />
                        </Link>
                    </Col>
                </Row>
           </Container>
          
      
        </div>
    )
}
