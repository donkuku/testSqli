<?php 
	
	function delete($conn, $id){
		
		 $sql = "DELETE FROM `myguests` WHERE `myguests`.`id` = '$id' ";
	
		if (mysqli_query($conn, $sql)){
			echo "delete complice " ;
		}
		else{
			echo "error delete customer";	
		}
	}

?>