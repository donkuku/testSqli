<?php

	include('connect.php');
	
	$sql 	= " select * from MyGuests ";
	$result = mysqli_query($conn,$sql);
	
	if (mysqli_num_rows($result) >= 0){
		//out put data from database
		while($row = mysqli_fetch_array($result)) {
			echo "id : ". $row["id"] . " - Name " . $row['firstname'] . " " . $row["lastname"]. "<br>" ;	
		}
	}
	else {
		echo " 0 result" ; 	
	}
	mysqli_close($conn);

?>