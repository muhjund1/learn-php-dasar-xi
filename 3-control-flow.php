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

// Swirch Case

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

?>
