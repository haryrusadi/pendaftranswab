<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$database	="pendaftaranswab";
// Create connection
$conn = mysqli_connect($hostName, $userName, $password,$database);
// Check connection

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	
	// echo "Connected successfully";
	
	?>