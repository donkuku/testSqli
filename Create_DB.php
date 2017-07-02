<?php 

	include ("connect.php");
	
	$sql = "CREATE DATABASE test_sqli";
	if (mysqli_query($conn,$sql)){
		echo "Database create complice ";
	}
	else { 
		echo "Error Create Database ". mysqli_error($conn); 
	}
	
	mysqli_close($conn);
	
?>