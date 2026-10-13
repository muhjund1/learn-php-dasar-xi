<?php
$nama = "Budi";
$umur = 20;
$tinggi = 175.5;
$menikah = false;
 
echo "Nama: $nama<br>";
echo 'Nama: $nama <br>';


// Operator aritmatika

$a = 10;
$b = 3;

echo "<br>";
echo $a + $b;  // 13
echo "<br>";
echo $a - $b;  // 7
echo "<br>";
echo $a * $b;  // 30
echo "<br>";
echo $a / $b;  // 3.33
echo "<br>";
echo $a % $b;  // 1 (modulus / sisa bagi)

// Perbandingan
echo ($a == $b); // sama nilai (loose)
$a === $b; // sama nilai & tipe (strict)
$a != $b; // tidak sama
$a !== $b; // tidak sama nilai & tipe
$a > $b; // lebih besar
$a < $b; // lebih kecil
$a >= $b; // lebih besar sama dengan
$a <= $b; // lebih kecil sama dengan
?>