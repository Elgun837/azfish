import React from 'react'
import menuIcon from '/images/Menu_Alt_04.svg'
import { useState } from 'react';
import Button from 'react-bootstrap/Button';
import Modal from 'react-bootstrap/Modal';
import "./menu.css";
import { Link, NavLink } from 'react-router-dom';
import LogoIMG from '/images/aff-logo.svg'
import youtubeSvg from '/images/youtube.svg'
import facebookSvg from '/images/facebook.svg'
import googleSvg from '/images/google.svg'
import instagramSvg from '/images/instagram.svg'

import Container from 'react-bootstrap/Container';
import About from '../about_section/about';
import Contact_us from '../Contact_us/contact_us';


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
          <div className='header menu-header-logo'>

            <Container className='heaeder-section-modal'>
              <div className='logo-section'>
                <Link to="/"> <img src={LogoIMG} /></Link>
              </div>

            </Container>
            <div className='menu-section modal-menu'>
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
              <li><NavLink activeClassName="selected" to={`${match.url}/about-us`} >About us</NavLink></li>
              <li><NavLink activeClassName="selected" to={`${match.url}/contact-us`}>Contacts</NavLink></li>
              <Switch>
                <Route exact path={`${match.url}/about-us`} component={About} />
                <Route path={`${match.url}/contact-us`} component={Contact_us} />

              </Switch>
            </ul>

            <div className='social-media-icons'>
              <ul className='social-share'>
                <li><img src={facebookSvg} /></li>
                <li><img src={instagramSvg} /></li>
                <li><img src={youtubeSvg} /></li>
                <li><img src={googleSvg} /></li>
              </ul>
            </div>
          </div>
          <div className='right-menu'></div>
        </Modal.Body>
      </Modal>
    </li>



  )
}
