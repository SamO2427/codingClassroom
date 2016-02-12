<?php
	//database config
	$dbServer 		= "localhost";
	$dbUsername 	= 'root';
	$dbPassword 	= '';
	$db 			= "codingClassroom";
	
	//reference: w3schools
	//create connection
	$conn = new mysqli($dbServer, $dbUsername, $dbPassword, $db);
	
	//check connection
	if ($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
?>