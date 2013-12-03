<?php

// Routes
getApi()->get('/api/page/read/(\w+)', array('Api', 'pageRead'), EpiApi::external);
getApi()->get('/api/page/write', array('Api', 'pageWrite'), EpiApi::external);


// CRUD: Create, Read, Update, Delete

class Api {

	// Common Array() Code
	function createArray()
	{
	 $page=array(
	 "title" => $_GET['title'],
	 "visible" => $_GET['visible'],
	 "content" => $_GET['content'],
	 "route" => $_GET['route']
	 );
	 $filename = str_replace("'", "", $page['route']);
	}

	// CREATE
	function pageCreate()
	{
	 call_user_func('createArray');
	 fopen("content/" . $filename . ".json", 'w');
	}

	// READ
	function pageRead( $pageId ) {
	  	return file_get_contents ( "content/" .$pageId . ".json");
	}

	// UPDATE
	function pageUpdate() {
	call_user_func('createArray');
	file_put_contents ("content/" . $filename . ".json", json_encode($page));

	return 200;
	}

	// DELETE
	function pageDelete($pageId)
	{
	 unlink ("content/" . $pageId . ".json");
	}

}
