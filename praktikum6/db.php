<?php
$servername ="localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
	
	die("Connection Failed: ".mysqli_connect_error());
}
	$sql = "CREATE DATABASE myDB";
	if (mysqli_query($conn, $sql)) {
		
		echo "Database create successfully";
	} else {
	 echo "Error creating database: ".mysqli_error($conn);
	}
	mysqli_close($conn);
?>