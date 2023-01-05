import React, { Component, Suspense } from "react";
import * as ReactDOM from 'react-dom';
import Main from "./Router";
import {BrowserRouter, Route} from 'react-router-dom';
import stores from "./stores";
import { Provider } from 'react-redux'
import "./i18n";

class Index extends Component 
{
    render(){
        return(
       
            <Provider store={stores}>
            <BrowserRouter>
                <Suspense fallback={<div>Loading ...</div>}>
                <Route component={Main} />
                </Suspense>
            </BrowserRouter>
            </Provider>
       
        )
    }
}

ReactDOM.render(<Index/>, document.getElementById("index"));