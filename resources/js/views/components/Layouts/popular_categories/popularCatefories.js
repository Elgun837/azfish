import React from 'react'
import fishIcon from "/images/fish-icon-fav.svg"
import "./pop.css"
import { Link } from 'react-router-dom'
import Container from 'react-bootstrap/Container';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import catImg1 from '/images/fresh-fish.png'
import catImg2 from '/images/ice-fish.png'
import catImg3 from '/images/caviar.png'
import { useState, useEffect } from 'react';

export default function popularCatefories() {
    const [data, setData] = useState([]);
    const [refresh, setRefresh] = useState(false);

    useEffect(() => {
        axios.get(`/api/popular_category`, {
    
        })
          .then((res) => {
    
    
            setData(res.data.data)
    
    
    
          })
          .catch(e => console.log(e));
      }, [refresh]);
    

    

    return (
        <div className="pop_cat-section container">
           <div className='header-column text-center'>
           <div className='header-box justify-content-center'>
                <img className='svg-img' src={fishIcon} alt="svg" />
                <h2>Popular Categories</h2>
            </div>
            <Link className='link-exp' to="">Get to know all our categories of products - </Link>
           </div>
           <Container className='pop-catefory-holder'>
                <Row className='category-holder '>
                    {data.slice(0,3).map((item, i) => (
                
                <Col className='category-item'>
                    <Link to="#">
                        <h4>{item.name}</h4>
                        <img className='category-img img-fluid' src={`/storage/${item.image}`}/>
                    </Link>
                </Col>
                
                ))
                   
}      
                </Row>
           </Container>
          
      
        </div>
    )
}
