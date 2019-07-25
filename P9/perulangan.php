<!doctype html>
<html>
<head>
    <title>Perulangan</title>
</head>
<body>
<h2>Perulangan For</h2>
<?php
for ($i = 9; $i > 1; $i -= 2) {
    echo 'Perulangan ke : ' . $i . '<br>';
}
?>

<hr>
<h2>Perulangan While</h2>
<?php

$j = 1;
while ($j <= 10) :
    echo $j;
    $j++;
endwhile;

?>

</body>
</html>