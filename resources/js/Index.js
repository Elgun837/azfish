import React from "react";
import { Route, Switch,Redirect } from 'react-router-dom';
import ReactDOM from 'react-dom'
import {  Provider } from "react-redux";
import { configureStore } from "@reduxjs/toolkit";
import { createBrowserHistory } from "history";
import { ConnectedRouter } from 'connected-react-router'
import { I18nextProvider } from "react-i18next";
import { connectRouter } from "connected-react-router";
//  Pages 


import i18n from "./i18n";
import reducer from "./reducer";
import navibar from "./views/components/Layouts/navibar";

console.log(location)


const store = configureStore({
    combineReducers:({
        router : connectRouter(history),
        navibar:reducer
      })
});
const history = createBrowserHistory();

const lang = i18n.language;
console.log(store)

navibar = connect(
    state => ({
      location: state.routing.location
    }),
    null
)(navibar);
const Main = ({ store, history }) => (
    <>
        <I18nextProvider i18n={i18n}>
            <Provider store={store}>
                <ConnectedRouter history={history}>
                    <Switch>
                        <Route path="/:locale" component={navibar} />
                        <Redirect to="/en" />
                    </Switch>
                </ConnectedRouter>
            </Provider>
        </I18nextProvider>


    </>
)

ReactDOM.render(<Main store={store} history={history} />, document.getElementById("index"));