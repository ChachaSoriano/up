<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "gcceas";
	
	$con = mysql_connect($host,$user,$password) or die(mysql_error());
	mysql_select_db($db);
?>