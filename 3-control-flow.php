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

?>
