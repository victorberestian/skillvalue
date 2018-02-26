import React from 'react';
import Home from './components/Home';
import ToDo from './components/ToDo';

const routes = [
  {
    path: "/",
    exact: true,
    main: () => <Home />,
    sidebar: () => <div>Home page</div>
  },
  {
    path: "/todos",
    exact: false,
    main: () => <ToDo />,
    sidebar: () => <div>Todo page</div>
  },
];

export default routes;