<?php
	include("connection.php");
	
	$outlet_id = $_POST['id'];
	$outlet_name = $_POST['name'];

		$query = "UPDATE electricpower SET outlet_name = '$outlet_name' WHERE outlet_id = $outlet_id";;
		mysql_query($query) or die(mysql_error());
			
		echo 'Successfully added.';
		echo $query;
?>