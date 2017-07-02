<?php

	include('connect.php');
	
	$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
	
	if (mysqli_query($conn,$sql)){
		echo " update complice ";	
	}
	else {
		echo "error update " . mysqli_error($conn);	
	}
	mysqli_close($conn);

?>