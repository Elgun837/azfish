import React from 'react'
import menuIcon from '/images/Menu_Alt_04.svg'
import { useState } from 'react';
import Button from 'react-bootstrap/Button';
import Modal from 'react-bootstrap/Modal';
import "./menu.css";
import { Link } from 'react-router-dom';
import LogoIMG from '/images/aff-logo.svg'


import Container from 'react-bootstrap/Container';




export default function menu() {

  const values = [true];
  const [fullscreen, setFullscreen] = useState(true);
  const [show, setShow] = useState(false);


  function handleShow(breakpoint) {
    setFullscreen(breakpoint);
    setShow(true);
  }
  return (
    <li>

      {values.map((v, idx) => (
        <Button key={idx} className="me-2 mb-2 menu-button" onClick={() => handleShow(v)}>
          Menu
          <img src={menuIcon} />

          {typeof v === 'string' && `below ${v.split('-')[0]}`}
        </Button>
      ))}
      <Modal show={show} fullscreen={fullscreen} onHide={() => setShow(false)}>
        <Modal.Header closeButton>
          <div className='header'>
            
            <Container className='heaeder-section-modal'>
              <div className='logo-section'>
                <Link to="/"> <img src={LogoIMG} /></Link>
              </div>
              
            </Container>
            <div className='menu-section'>
                <nav>
                  <ul>


                    <li><Link to="/az">Az</Link></li>
                    <hr className='horizontal-divider' />
                    <li><Link to="/ru">Ru</Link></li>

                    
                    
                  </ul>

                </nav>
              </div>
          </div>
        </Modal.Header>
        <Modal.Body >
          <div className='left-menu col'>
            <ul>
              <li><Link to='/about-us'>About us</Link></li>
              <li><Link to='/contact-us'>Contacts</Link></li>
              <li><Link to=''>Sustainability</Link></li>
              <li><Link to=''>Production</Link></li>
              <li><Link to=''>Media</Link></li>
              <li><Link to=''>Career</Link></li>
            </ul>
          </div>
          <div className='right-menu'></div>
        </Modal.Body>
      </Modal>
    </li>



  )
}
