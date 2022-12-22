import React from 'react'
import menuIcon from '/images/search-normal.svg'
import { useState } from 'react';
import Button from 'react-bootstrap/Button';
import Modal from 'react-bootstrap/Modal';
import "./searchbar.css";
import { Link, NavLink } from 'react-router-dom';
import Container from 'react-bootstrap/Container';
import LogoIMG from '/images/aff-logo.svg'
import youtubeSvg from '/images/youtube.svg'
import facebookSvg from '/images/facebook.svg'
import googleSvg from '/images/google.svg'
import instagramSvg from '/images/instagram.svg'

export default function SearchBar() {

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
        <Button key={idx} className="me-2 mb-2 search-button" onClick={() => handleShow(v)}>

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
          <div className='wide-search col'>
            <div className='search-section'>
              <form id='search-form'>
                <input
                  type="search"
                  className='search-bar-modal'
                  name="s"
                  id="s"
                  placeholder="Search here"
                />
                
                <button type="submit" id="searchsubmit">
                <img src={menuIcon} />
                </button>
              </form>
            </div>

            <div className='social-media-icons'>
              <ul className='social-share'>
                <li><img src={facebookSvg} /></li>
                <li><img src={instagramSvg} /></li>
                <li><img src={youtubeSvg} /></li>
                <li><img src={googleSvg} /></li>
              </ul>
            </div>
          </div>

        </Modal.Body>
      </Modal>
    </li>



  )
}
