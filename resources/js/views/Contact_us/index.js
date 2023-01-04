import React from 'react'
import Layout from '../components/Layouts/front.layout'
import Contact_us from '../components/Layouts/Contact_us/contact_us'
import Footer from '../components/Layouts/footer_section/footer'
import Page_title from '../components/Layouts/page_title/page_title'

function Contact() {
  return (
    <div>

      <Layout>
        <Page_title name="Contacts" />
        <Contact_us />
        <Footer />
      </Layout>

    </div>
  )
}

export default Contact