import React from 'react'
import './contact.css'
export default function Contact_us() {
    return (
        <>
            <div className="contact-us container">

                <div className="left-side-contact col"></div>
                <div className="right-side-contact col">
                    <h2 className="mailer-header">We'll help you
                        choose!</h2>
                    <p className="mailer-description">
                        Join us in making nutritious seafood accessible to all. Our experts can consult you with choice variations and make the best to get the most suitable products to your preference.
                    </p>
                    <form className="contact_form" >
                        <input type="text" name="name" placeholder='Name, Surname' required />
                        <input type="email" name='email' placeholder='Email adress' required />
                        <input type="number" name='phone' placeholder='Phone' required />
                        <input type="text" name="company" placeholder='Company name' required />
                        <textarea name="message" rows="7" placeholder='Your Messages' required></textarea>
                        <button type='submit' className='btn btn-primary'>Send</button>
                    </form>
                </div>
            </div>
        </>
    )
}
