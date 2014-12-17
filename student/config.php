<?php
	$host = "mysql.hostinger.ph";
	$user = "u500873463_cache";
	$password = "Ec1234567";
	$db = "u500873463_cache";
	
	$con = mysql_connect($host,$user,$password) or die(mysql_error());
	mysql_select_db($db);
?>