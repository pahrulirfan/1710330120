<!DOCTYPE html>
<html>
<head>
	<title>Kondisi</title>
</head>
<body>
	<h2>Switch Case</h2>
	<?php
	$nilai = 90;
	switch ($nilai) {
		case '90':
			echo 'Nilai : A';
			break;
		case '80':
			echo 'Niali : B';
			break;
		default:
			echo 'Nilai : F';
			break;
	}
	?>

	<h2>If else</h2>
	<?php
	$nilai = 88;

	if ($nilai >= 90) {
		$grade = "A";
	} elseif ($nilai > 80) {
		$grade = "B";
	} else {
		$grade = "F";
	}
	
	echo 'Nilai anda: '.$nilai;
	echo '<br>';
	echo 'Grade: ' . $grade;
	?>
</body>
</html>