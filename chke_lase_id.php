<?php

	include('connect.php');
	
	echo mysqli_insert_id($conn);

?>