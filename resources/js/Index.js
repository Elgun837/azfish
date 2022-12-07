import React, { Component } from "react";
import * as ReactDOM from 'react-dom';
import Main from "./Router";
import {BrowserRouter, Route} from 'react-router-dom';

class Index extends Component 
{
    render(){
        return(
        <div>
            <BrowserRouter>
                <Route component={Main} />
            </BrowserRouter>
        </div>
        )
    }
}

ReactDOM.render(<Index/>, document.getElementById("index"));