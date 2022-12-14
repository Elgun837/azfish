import React from 'react'
import Layout from '../components/Layouts/front.layout'
import { useEffect } from 'react'
import Carousel from '../components/carousel';
import About from '../components/Layouts/about_section/about';
import Brands from '../components/Layouts/brand_section/brands';


function Home() {

  


  return (
    
     
     <Layout>
      
        <Carousel />
        <About />
        <Brands />

      </Layout>
   
    
  )
}

export default Home