<?php

// Routes
getRoute()->get('/', array('App', 'home'));
getRoute()->get('/page/(\w+)', array('App', 'page'));

class App {
	static public function home() {
		// TODO: same as page but default content

    	echo 'Hello, world';
	}

	static public function page( $pageId ) {
		// TODO: load data from API
		// TODO: parse data and wrap with layout
		// TODO: print content

    	echo 'Viewing page ' . $pageId;
	}
}