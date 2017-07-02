<?php

	include('connect.php');
	
	$sql = "create table MyGuests ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL,
			email VARCHAR(50),reg_date TIMESTAMP ) ";
	
	if (mysqli_query($conn,$sql)){	
		echo " create table complie ";	}
	else {	
		echo " Error create table " . mysqli_error($conn);
	}
	
	mysqli_close($conn);
?>