<?php

// Routes
getApi()->get('/api/page/read/(\w+)', array('Api', 'pageRead'), EpiApi::external);
getApi()->get('/api/page/write', array('Api', 'pageWrite'), EpiApi::external);

class Api {
	function pageRead( $pageId ) {

	  	return file_get_contents ( "content/" .$pageId . ".json");
	}

	function pageWrite() {
		$page=array(
		"title" => $_GET['title'],
		"visible" => $_GET['visible'],
		"content" => $_GET['content'],
		"route" => $_GET['route']
		);

		$filename = str_replace("'", "", $page['route']);

		file_put_contents ("content/" . $filename . ".json", json_encode($page));

		return 200;
	}
}