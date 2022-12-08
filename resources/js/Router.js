import React from "react";
import { Route, Switch } from 'react-router-dom';


//  Pages 

import Homepage from "./views/Homepage";
import About from "./views/About_us";
import Contact from "./views/Contact_us";






const Main = () => (
    <>


        <Switch>
            <Route exact path="/" component={Homepage}></Route>
            <Route path="/about-us" component={About}></Route>
            <Route path="/contact-us" component={Contact}></Route>
        </Switch>

    </>
)

export default Main;