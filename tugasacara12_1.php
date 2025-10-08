<?php
// Soal 1
$siswa = [
    ["Andi", 85, 90],
    ["Budi", 78, 88],
    ["Citra", 92, 95]
];

// Cetak nilai Bahasa dari siswa ke-2
echo "Nilai Bahasa siswa ke-2 (" . $siswa[1][0] . "): " . $siswa[1][2] . "<br><br>";

// Cetak semua data menggunakan looping
echo "Data Semua Siswa:<br>";
for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i][0] . 
         ", Matematika: " . $siswa[$i][1] . 
         ", Bahasa: " . $siswa[$i][2] . "<br>";
}
?>