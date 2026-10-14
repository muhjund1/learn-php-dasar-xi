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

?>
