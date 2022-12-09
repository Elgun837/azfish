import React from 'react'
import Layout from '../components/Layouts/front.layout'
import { useEffect } from 'react'
import Carousel from '../components/carousel';


function Home() {

  useEffect(() => {
    axios.get(`/api/product/1`,{
        headers:{
            apiLocale: "ru"
        }
    }).then((res) => {
       console.log(res)
    })
    .catch(e => console.log(e)); 
});


  return (
    <div>
     
     <Layout>
      <div>
        <Carousel />
      </div>
      </Layout>
   
    </div>
  )
}

export default Home