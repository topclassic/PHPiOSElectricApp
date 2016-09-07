<?php
	include("connection.php");
	
	$outlet_id = $_POST['id'];
	$elec_limit = $_POST['limit'];

		$query = "UPDATE electricpower SET elec_limit = '$elec_limit' WHERE outlet_id = $outlet_id";;
		mysql_query($query) or die(mysql_error());
			
		echo 'Successfully added.';
		echo $query;
?>