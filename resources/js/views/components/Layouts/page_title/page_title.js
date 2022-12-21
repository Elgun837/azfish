import React from 'react'
import './page_title.css'

export default function Page_title(props) {
    return (
        <>
            <div className='title_section'>
                <div className='container'>
                    <h2>{props.name}</h2>
                    <p>BreadCrumbs</p>
                </div>
            </div>
        </>
    )
}
