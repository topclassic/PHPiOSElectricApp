<?php

	include("connection.php");

	$query = 'SELECT * FROM electricpower';
	$resultset = mysql_query($query);
			
	$records= array();
		
		while($r = mysql_fetch_assoc($resultset)){
			$records[] = $r;
		}
			
		echo json_encode($records);

?>