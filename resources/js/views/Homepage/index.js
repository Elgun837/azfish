import React from 'react'
import Layout from '../components/Layouts/front.layout'
import Carousel from '../components/carousel';
import About from '../components/Layouts/about_section/about';
import Brands from '../components/Layouts/brand_section/brands';
import PopularCatefories from '../components/Layouts/popular_categories/popularCatefories';
import Partners from '../components/Layouts/partners/partners';


function Home() {

  


  return (
    
     
     <Layout>
      
        <Carousel />
        <About />
        <Brands />
        <PopularCatefories />
        <Partners />
      </Layout>
   
    
  )
}

export default Home