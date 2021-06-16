import React, { useState } from "react";
import ReactDOM from "react-dom";
import { BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";

import Sidebar from "./sidebar/Sidebar";
import Home from "./pages/Home";
import Queue from "./pages/Queue";

const Main = () => {
    return (
        <Router>
            <Sidebar />
            <Switch>
                <Route path="/dashboard" exact component={Home} />
                <Route path="/dashboard/queue" component={Queue} />
            </Switch>
        </Router>
    );
};

export default Main;

// DOM element
if (document.getElementById("main")) {
    ReactDOM.render(<Main />, document.getElementById("main"));
}
