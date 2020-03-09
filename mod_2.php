
<html>
<head>
	<title> Pemrograman PHP dengan Array</title>
</head>
<body>
	<?php
	$nama[] = "Baitun";
	$nama[] = "Nadhiroh";
	$nama[] = "Saya";
	echo $nama[1] . $nama[2] . $nama[0];
	echo "<br>";

	$jum_array = count($nama);
	echo "Jumlah elemen array= ". $jum_array;

	?>

</body>
</html>