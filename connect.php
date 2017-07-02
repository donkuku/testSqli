<?php 

	$name_server 	= "localhost";
	$Username 		= "root";
	$password		= "";
	$name_db		= "test_sqli";
	
	$conn = mysqli_connect($name_server,$Username,$password,$name_db);
	
	if (!$conn)
		{ die("Connection failed: " . mysqli_connect_error()); }

?>