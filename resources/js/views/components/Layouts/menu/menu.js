import React from 'react'
import menuIcon from '/images/Menu_Alt_04.svg'
import { useState } from 'react';
import Button from 'react-bootstrap/Button';
import Modal from 'react-bootstrap/Modal';
import "./menu.css";




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
          <Modal.Title>Modal</Modal.Title>
        </Modal.Header>
        <Modal.Body>Modal body content</Modal.Body>
      </Modal>
    </li>



  )
}
