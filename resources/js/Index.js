import React, { Component, Suspense } from "react";
import { render } from "react-dom";
import {  Redirect, Route, Router } from 'react-router-dom';
import store from "./stores";
import { Provider } from 'react-redux'
import i18n from "./i18n";
import { I18nextProvider } from "react-i18next";
import Homepage from "./views/Homepage";
import About from "./views/About_us";
import Contact from "./views/Contact_us";
import { Switch } from "react-router-dom";
import { createBrowserHistory } from "history"



const generateLanguage = (locale, location) => {
    const ROUTE = "/:locale/:path*";
    const definePath = compile(ROUTE);
    const routeComponents = PathToRegexp(ROUTE).exec(location.pathname);

    let subPaths = null;
    if (routeComponents && routeComponents[2]) {
        subPaths = routeComponents[2].split("/");
    }

    return definePath({
        locale,
        path: subPaths
    });
};



const changeLanguage = lng => {

    i18n.changeLanguage(lng);

};

const lang = i18n.language;
let App = ({ match }) => {



    if (lang != match.params.locale) {
        
        changeLanguage(match.params.locale);

    }
    return (

        <>


            <Switch>
                <Route exact path={`${match.url}/`} component={Homepage}></Route>
                <Route path={`${match.url}/about-us`} component={About}></Route>
                <Route path={`${match.url}/contact-us`} component={Contact}></Route>
            </Switch>

        </>
    )
}


const history = createBrowserHistory();
const url = location.pathname;
console.log(url)


const Index = ({ store, history }) => (

    <I18nextProvider i18n={i18n}>
        <Provider store={store}>
            <Router history={history}>
                <Suspense>
                    <Route path="/:locale" component={App} />
                    {location.pathname === "/" ? <Redirect to="/az" /> : location.pathname }  
                </Suspense>
            </Router>
        </Provider>
    </I18nextProvider>
)
render(<Index store={store} history={history} />, document.getElementById("index"));