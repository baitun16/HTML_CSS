<?php
include "admin/koneksi.inc.php";

$vnama=$_POST['nama'];
$vjkel=$_POST['jkel'];
$vemail=$_POST['email'];
$valamat=$_POST['alamat'];
$vkota=$_POST['kota'];
$vpesan=$_POST['pesan'];

$sql ="INSERT INTO kontak (nama,jkel,email,alamat,kota,pesan) VALUES ('$vnama', '$vjkel', '$vemail', '$valamat', '$vkota', '$vpesan')";

mysqli_query($conn, $sql) or die ("Proses Simpan Ke database gagal"); 

mysqli_close($conn);
header("location:kontak.html");
?>