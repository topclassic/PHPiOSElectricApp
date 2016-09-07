<?php
$server_name = "ap-cdbr-azure-east-c.cloudapp.net";
$user_name = "beb6921276ff45";
$password = "9a4714fc";
$con = mysql_connect($server_name, $user_name, $password)
or die ('Server Error: ' . mysql_error());
//select database for use
$database_name = 'topelectric';
mysql_select_db($database_name) or die ('DB Error: Unable to select db');
mysql_query("SET NAMES 'utf8'");
?>