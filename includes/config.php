<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/London");

	$server = "sql205.epizy.com";
	$username = "epiz_27266259";
	$password = "Z4LznCUbri2NFPg";
	$dbname = "epiz_27266259_slotifyy";

	$con = mysqli_connect($server, $username, $password, $dbname);

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>