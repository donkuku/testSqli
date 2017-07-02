<?php

	include('connect.php');
	
	$sql = "insert into MyGuests (firstname, lastname, email) values ('John', 'Doe', 'john@example.com') ";
	
	if (mysqli_query($conn,$sql)){
		$last_id = mysqli_insert_id($conn);	
		echo " last id db  =  " . $last_id;
	}
	else {
		echo "error" . $sql . "<br>" . mysqli_error($conn);	
	}
	
	mysqli_close($conn);

?>