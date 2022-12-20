import React from 'react'
import Layout from '../components/Layouts/front.layout'
import Footer from '../components/Layouts/footer_section/footer'
import Page_title from '../components/Layouts/page_title/page_title'
function About() {
  return (
    <div>

      <Layout>
      <Page_title name="About us" />
        
        <Footer />
      </Layout>
      
    </div>
  )
}

export default About