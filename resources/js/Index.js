import React, { Component, Suspense } from "react";
import * as ReactDOM from 'react-dom';
import Main from "./Router";
import {BrowserRouter, Route} from 'react-router-dom';

import "./i18n";

class Index extends Component 
{
    render(){
        return(
       
            
            <BrowserRouter>
            <Suspense fallback={<div>Loading ...</div>}>
                <Route component={Main} />
                </Suspense>
            </BrowserRouter>
       
        )
    }
}

ReactDOM.render(<Index/>, document.getElementById("index"));