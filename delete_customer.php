<?php

	include('connect.php');
	
	$id  = $_GET['id'];
	$sql = "DELETE FROM `myguests` WHERE id = '$id' ";
	
	if (mysqli_query($conn, $sql)){
		echo "delete complice " ;
		header('location:/test_sqli');
	}
	else{
		echo "error delete customer";	
	}

?>