<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP</title>
</head>
<body>
	<h2>Variable</h2>
	<hr>
	<?php
	$umur = 89;
	$nama = 'Pahrul Irfan';
	// cetak nama dan umur
	echo 'Nama : ' . $nama;
	echo '<br>';
	echo 'Umur : ' . $umur;

	echo '<hr>';
	$a = 89;
	$b = 98;
	$jumlah = $a + $b;
	echo 'Nilai A : ' , $a;
	echo "<br>";
	echo 'Nilai B : '.$b;
	echo "<br>";
	print 'Jumlah : ' . $jumlah;
	?>
	<hr>
	<h2>Array</h2>
	<hr>
	<?php
	echo "array indexed <br>";
 	// array index menggunakan kunci int.
	$arrayumur = array(89,78,56);
	// array dibuatkan kunci atau index
	$arrayumur2 = array(9 => 89,78,56);

	print_r($arrayumur);
	echo "<br>";
	print_r($arrayumur2);

 	echo "<hr>Array Asosiatif <br>";
 	$ass = array('a' => 78, 'x' => 89);
 	print_r($ass);
 	// array asosiatif menggunakan kunci string,
	?>
</body>
</html>