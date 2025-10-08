<?php
// Soal 4
$angka = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $angka[$i][$j] = rand(1, 9);
    }
}

// Cetak dalam bentuk matriks
echo "Matriks 3x3:<br>";
$total = 0;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $angka[$i][$j] . " ";
        $total += $angka[$i][$j];
    }
    echo "<br>";
}

// Cetak total
echo "<br>Total semua elemen: $total";
?>