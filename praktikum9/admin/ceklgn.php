<?php
include'koneksi.inc.php';

$username =$_POST['username'];
$password =$_POST['pass'];


$sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query ($conn, $sql);

if (mysqli_num_rows($result)> 0){
	session_start();
	$_SESSION['username']=$username;
	header ("Location: cetak.php");
}else {
	echo "<h1>Gagal Login</h1>";
	echo "<hr>";
}

?>