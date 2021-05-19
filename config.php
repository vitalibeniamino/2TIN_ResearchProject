<?php
	require('vendor/autoload.php');
	//extension=mysqli
	// Define mysql server settings
	$serverName = "cloud-pxl-rds-db.c57wlolvl1fy.us-east-1.rds.amazonaws.com";
	$username = "mysqlcloud";
	$password = "ventieldopje24";
	$dbName = "employees";

	// Create a new mysqli connection. Remember to enable this in php.ini !!
	$conn = new mysqli($serverName, $username, $password, $dbName);
