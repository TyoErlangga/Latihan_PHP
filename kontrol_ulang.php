<?php
$nilai = 90;

echo "CONTOH IF ELSE <br>";
if ($nilai >= 80 && $nilai <= 100) {
    echo "Nilai Anda $nilai, Grade A <br>";
} elseif ($nilai >= 61 && $nilai <= 70) {
    echo "Nilai Anda $nilai, Grade B <br>";
} elseif ($nilai >= 51 && $nilai <= 60) {
    echo "Nilai Anda $nilai, Grade C <br>";
} elseif ($nilai >= 41 && $nilai <= 50) {
    echo "Nilai Anda $nilai, Grade D <br>";
} elseif ($nilai >= 0 && $nilai <= 40) {
    echo "Nilai Anda $nilai, Grade E <br>";
} else {
    echo "Nilai tidak valid <br>";
}

echo "<br>CONTOH SWITCH <br>";
switch (true) {
    case ($nilai >= 80 && $nilai <= 100):
        echo "Grade A <br>";
        break;
    case ($nilai >= 61 && $nilai <= 70):
        echo "Grade B <br>";
        break;
    case ($nilai >= 51 && $nilai <= 60):
        echo "Grade C <br>";
        break;
    case ($nilai >= 41 && $nilai <= 50):
        echo "Grade D <br>";
        break;
    case ($nilai >= 0 && $nilai <= 40):
        echo "Grade E <br>";
        break;
    default:
        echo "Nilai tidak valid <br>";
}

echo "<br>CONTOH FOR <br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Looping FOR ke : " . $i . "<br>";
}

echo "<br>CONTOH WHILE <br>";
$j = 1;
while ($j <= 5) {
    echo "Looping WHILE ke : " . $j . "<br>";
    $j++;
}
?>