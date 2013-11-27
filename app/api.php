<?php

// Routes
getApi()->get('/api/page/read/(\w+)', array('Api', 'pageRead'), EpiApi::external);

class Api {
	function pageRead( $pageId ) {
		
	  	return 'Hello, '.$pageId;
	}
}