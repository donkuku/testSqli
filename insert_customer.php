<?php

	include('connect.php');
	
	$name  = $_POST['name'];
	$last  = $_POST['lastname'];
	$email = $_POST['email'];
	
	$sql = "INSERT INTO `myguests`(`firstname`, `lastname`, `email`) VALUES ( '$name' , '$last' , '$email' )";
	
	if (mysqli_query($conn, $sql)){
		echo "insert complict " ;
		header("location:selete_customer.php");	
	}
	else {
		echo "error insert into " . mysqli_error($conn);	
	}
	mysqli_close($conn);
?>