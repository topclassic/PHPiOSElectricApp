<?php
	include("connection.php");
	
	$outlet_id = $_POST['id'];

		$query = "DELETE FROM electricpower WHERE outlet_id = $outlet_id";;
		mysql_query($query) or die(mysql_error());
			
		echo 'Successfully added.';
		echo $query;
?>