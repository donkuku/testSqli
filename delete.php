<?php

	include('connect.php');
	
	$sql = " delete from MyGuests WHERE id=3";
	
	if (mysqli_query($conn,$sql)){
		echo "delete complit" ;	
	}
	else{
		echo "error delete" . mysqli_error($conn) ;	
	}
	
	mysqli_close($conn);

?>