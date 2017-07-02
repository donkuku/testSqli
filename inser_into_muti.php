<?php

	include('connect.php');
	
	$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com');";
	$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Mary', 'Moe', 'mary@example.com');";
	$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Julie', 'Dooley', 'julie@example.com')";
	
	if (mysqli_multi_query($conn, $sql)){
		echo "insert into complice ";	
	}
	else {
		echo "error " . $sql . "<br>" . mysqli_error($conn);	
	}
	
	mysqli_close($conn);

?>