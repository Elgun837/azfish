import React from 'react'
import Layout from '../components/Layouts/front.layout'
import { useEffect } from 'react'
import Carousel from '../components/carousel';
import About from '../components/Layouts/about_section/about';


function Home() {

  


  return (
    
     
     <Layout>
      
        <Carousel />
        <About />
      
      </Layout>
   
    
  )
}

export default Home