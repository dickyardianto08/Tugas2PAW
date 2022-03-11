<!DOCTYPE html>
<html>
<head>
	<title>Fungsi</title>
</head>
<body>

<?php 
function mult(int $angka1, int $angka2) {
	$hasilmult = $angka1 * $angka2 ;
	return $angka1. "*". $angka2. "=". $hasilmult ;
}

echo mult(12, 10). "<br>";
echo mult(150, 3). "<br>";
echo mult(7, 3) ;

 ?>
</body>
</html>