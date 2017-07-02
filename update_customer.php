<?php

	include('connect.php');
	
	$id	   = $_GET['id'];
	$name  = $_POST['name'];
	$last  = $_POST['lastname'];
	$email = $_POST['email'];
	
	$sql = "UPDATE `myguests` SET `firstname`= '$name' ,`lastname`= '$last' ,`email`= '$email' WHERE id = '$id' ";
	
	if (mysqli_query($conn, $sql)){
		header('location:selete_customer.php');	
	}
	else {
		echo "UPDATE error" . mysqli_error($conn);	
	}
	
	mysqli_close($conn);

?>