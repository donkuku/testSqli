<?php

	include('connect.php');
	
	$sql = "insert into `myguests` (firstname, lastname, email) values ('John', 'Doe', 'john@example.com')";
	
	if (mysqli_query($conn, $sql)){
		echo "insert into complice ";	
	}
	else {
		echo "error insert into " . mysqli_error($conn);	
	}
	
	mysqli_close($conn);

?>