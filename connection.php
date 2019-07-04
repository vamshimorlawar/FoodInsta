<?php 
	
	$host = 'localhost';
	$server = 'root';
	$password = '';
	$database = 'foodsuggestion';

	$conn = mysqli_connect($host, $server, $password, $database);

	if(!$conn){
		
		die("Oops! Can't connect to the server.");
	} 
?>