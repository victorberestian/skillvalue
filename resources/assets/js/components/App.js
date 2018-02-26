import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import TodoList from './ToDo';
import Home from './Home';
import PageNotFound from './404';
import { BrowserRouter as Router, Route, Link, Switch } from "react-router-dom";
import './App.scss';
import routes from '../routes';
console.log(routes);

export default class App extends Component {
  render() {
    return (
      <Router>
        <div className="container">
          <div className="d-flex">
            <img src="http://via.placeholder.com/140x75" />

            <ul className="nav">
              <li className="nav-item"><Link className="nav-link" to="/">Home</Link></li>
              <li className="nav-item"><Link className="nav-link" to="/todos">Todos</Link></li>
              <li className="nav-item"><Link className="nav-link" to="/not-found">404</Link></li>
              <li>
                <Switch>
                  {routes.map((route, index) => (
                    <Route exact={route.exact} key={index} path={route.path} component={route.sidebar} />
                  ))}
                  <Route component={() => <span>Page not found</span>} />
                </Switch>
              </li>
            </ul>
          </div>

          <div className="body">
            <Switch>
              {routes.map((route, index) => (
                <Route exact={route.exact} key={index} path={route.path} component={route.main} />
              ))}
              <Route component={PageNotFound} />
            </Switch>
          </div>
        </div>
      </Router>
    );
  }
}

if (document.getElementById('todo')) {
  ReactDOM.render(<App />, document.getElementById('todo'));
}
