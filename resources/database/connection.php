<?php 

	$db = new mysqli('localhost', 'root', '','liquordb');
	
	
	
	
	if($db->connect_errno) {
		die('Unable to connect to database');
	}


