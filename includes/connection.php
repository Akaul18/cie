<?php
	$con = mysqli_connect("localhost","root","root","daviet_cie") or die("Database not found..,,,!!").mysqli_error($con);
	$environment = "development";
	if($environment == "online"){
		error_reporting(0);
	}
	header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
	header("Pragma: no-cache"); // HTTP 1.0.
	header("Expires: 0");
 ?>
