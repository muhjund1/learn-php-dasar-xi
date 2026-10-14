<?php
//percabangan
$nilai = 85;

if($nilai >= 90) {
    echo "Grade A";
} elseif ($nilai >= 75) {
    echo "Grade B";
} elseif ($nilai >= 60) {
    echo "Grade C";
} else {
    echo "Grade D";
}

// ternary
echo "<br>";
$umur = 16;
$status = $umur >= 17 ? "Bisa bikin SIM" : "Belum bisa bikin SIM";
echo $status;

// Null Coalscing Operator 
echo "<br>";
$nama = $_GET['nama'] ?? 'Tamu';
echo $nama;

// Switch Case

echo "<br>";
$hari = date('1');
switch ($hari) {
    case 'Monday':
        echo "Mulai Kerja!";
        break;
    case 'Friday':
        echo "Hari terakhir kerja!";
        break;
    case 'Saturday':
    case 'Sunday':
        echo "Libur!";
        break;
    default:
        echo "Hari biasa";

}

// Perulangan (Loop)
echo "<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Angka: $i <br>";
}
// 1 2 3 4 5

// while
echo "<br>";
$i = 1;
while ($i <= 5) {
    echo "$i ";
    $i++;
}

// froeach
echo "<br>";
$buah = ["Apel", "Mangga", "Jeruk"];
 
foreach ($buah as $item) {
    echo "$item <br>";
}
 
// Dengan key => value
$nilai = ["Matematika" => 90, "IPA" => 85];
foreach ($nilai as $mapel => $skor) {
    echo "$mapel: $skor <br>";
}

//Break & Continue
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) continue;  // Skip genap
    if ($i == 7) break;          // Stop di 7
    echo "$i ";                  // Output: 1 3 5
}

// Kalkulator Sederhana
echo "<break>";
$a = 10;
$b = 5;
$operator = '+';  // Coba ganti: '+', '-', '*', '/', '%'
 
switch ($operator) {
    case '+': $hasil = $a + $b; break;
    case '-': $hasil = $a - $b; break;
    case '*': $hasil = $a * $b; break;
    case '/': $hasil = $a / $b; break;
    case '%': $hasil = $a % $b; break;
    default: $hasil = "Operator tidak dikenal";
}
 
echo "$a $operator $b = $hasil";

?>
