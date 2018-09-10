<?php 
error_reporting(0);
$angka = $_GET ['angka'];
function piramid ($x, $y){
	if ($x > 0) {
	if ($y > 0) {
		echo "* ";
		$y--;
		piramid($x,$y);
	}
	else{
		echo "<br>";
		$x--;
		piramid($x, $x);
		}
	}
}
piramid ($angka, $angka)

for ($i=0; $i < $angka ; $i++) { 
	if ($i % 2 == 0) {
		echo " $i = bilangan genap";
	}else {
		echo " $i = bilangan ganjil";
	}
}
?>
