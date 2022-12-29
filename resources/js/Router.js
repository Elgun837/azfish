import React from "react";
import { Route, Switch,Redirect } from 'react-router-dom';

import { connect, Provider } from "react-redux";
import { configureStore } from "@reduxjs/toolkit";
import {  routerReducer } from "react-router-redux";
import { createBrowserHistory } from "history";
import { pathToRegexp, compile, parse } from "path-to-regexp";
import { ConnectedRouter } from "react-router-redux";
import { I18nextProvider } from "react-i18next";
//  Pages 
import i18next from "i18next";
import Homepage from "./views/Homepage";
import About from "./views/About_us";
import Contact from "./views/Contact_us";
import i18n from "./i18n";
import reducer from "./reducer";
import menu from "./views/components/Layouts/menu/menu";
import navbar from "./views/components/Layouts/navbar";

const store = configureStore({
    reducer: {
        app: reducer,
        routing: routerReducer
    }
});
const history = createBrowserHistory();

const lang = i18n.language;






const Main = ({ store, history }) => (
    <>
        <I18nextProvider i18n={i18n}>
            <Provider store={store}>
                <ConnectedRouter history={history}>
                    <Switch>
                        <Route path="/:locale" component={navbar} />
                        <Redirect to="/en" />
                    </Switch>
                </ConnectedRouter>
            </Provider>
        </I18nextProvider>


    </>
)

export default Main;