<?php
// 1. Fungsi untuk menentukan bilangan terbesar dari 2 bilangan
function terbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// Contoh penggunaan fungsi terbesar
echo "Bilangan terbesar dari 100 dan 150 adalah: " . terbesar(100, 150) . "<br><br>";

// 2. Menampilkan Tanggal, Bulan, dan Tahun sekarang dengan getdate()
$sekarang = getdate();
echo "Tanggal sekarang dengan getdate(): " . $sekarang['mday'] . "-" . $sekarang['mon'] . "-" . $sekarang['year'] . "<br><br>";

// 3. Menampilkan Tanggal, Bulan, dan Tahun sekarang dengan date()
echo "Tanggal sekarang dengan date(): " . date('d-F-Y') . "<br>";
?>