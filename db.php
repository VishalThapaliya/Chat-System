<?php

	$host = "localhost";
	$user = "root";
	$pass =	"";
	$db_name = "chat";
	
	$dbConnect = new mysqli($host, $user, $pass, $db_name);
	
	function FormatDate($date){
		return date('g:i a', strtotime($date));
	}

?>