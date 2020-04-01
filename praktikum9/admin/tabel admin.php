<?php
$servername ="localhost";
$username = "Baitun";
$password = "";
$dbname = "euy";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	# code...
	die("Connection failed: ".mysqli_connect_error());
}
$sql = "CREATE TABLE admin (username VARCHAR(30) NOT NULL, password VARCHAR(10) NOT NULL PRIMARY KEY)";

if (mysqli_query($conn, $sql)) {
	echo "New table created succesfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
?>