import React, { Component, Suspense } from "react";
import * as ReactDOM from 'react-dom';
import { render } from "react-dom";
;
import { BrowserRouter, Route } from 'react-router-dom';
import store from "./stores";
import { connect, Provider } from 'react-redux'
import i18n from "./i18n";
import { I18nextProvider } from "react-i18next";
import Homepage from "./views/Homepage";
import About from "./views/About_us";
import Contact from "./views/Contact_us";
import { createBrowserHistory } from "history";
import { Redirect, Switch } from "react-router-dom";
import { useSelector } from "react-redux";



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
const history = createBrowserHistory();
const lang = i18n.language;

const changeLanguage = lng => {
    i18n.changeLanguage(lng);
  };
let App = ({ match, location }) => {
   
    const lang = useSelector(state => state.language);
    if (lang != match.params.locale) {
        changeLanguage(match.params.locale);
    }
return(

        <>


            <Switch>
                <Route exact path={`${match.url}/`} component={Homepage}></Route>
                <Route path={`${match.url}/about-us`} component={About}></Route>
                <Route path={`${match.url}/contact-us`} component={Contact}></Route>
            </Switch>

        </>
        )
}




const Index = ({ store, history }) => (

    <I18nextProvider i18n={i18n}>
        <Provider store={store}>
            <BrowserRouter >
                <Suspense fallback={<div>Loading ...</div>}>
                    <Route path="/:locale" component={App} />
                    
                </Suspense>
            </BrowserRouter>
        </Provider>
    </I18nextProvider>
)
render(<Index store={store}/>, document.getElementById("index"));