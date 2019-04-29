import NotFound from './components/NotFound';

import Home from './components/Home';

import About from './components/About';

export default {

	mode: 'history',

	linkActiveClass: 'active-link',

	routes: [

		{

			path: '*',

			component: NotFound

		},

		{

			path: '/',

			component: Home

		},

		{

			path: '/about',

			component: About

		},

	]

};