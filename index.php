	manu

<?php

	@$paper = $_GET['paper'];
	
	switch($paper){
		case "home":
			$paper = "selete_customer.php";
			break;
		case "update":
			$paper = "form_update.php";
			break;
		case "delete":
			$paper = "delete_customer.php";
			break;
		case "ceate":
			$paper = "form_insert_customer.php";
			break;
		default :
			$paper = "selete_customer.php";
			break;
	}
	include("$paper");
?>