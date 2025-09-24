<?php
// Array data mahasiswa (nama + nilai)
$mahasiswa = [
    ["nama" => "Andi",   "nilai" => 90],
    ["nama" => "Budi",   "nilai" => 78],
    ["nama" => "Citra",  "nilai" => 65],
    ["nama" => "Dewi",   "nilai" => 50],
    ["nama" => "Erlangga", "nilai" => 85]
];

// Fungsi menentukan kategori nilai
function kategori($nilai) {
    if ($nilai >= 85) {
        return "Sangat Baik";
    } elseif ($nilai >= 70) {
        return "Baik";
    } elseif ($nilai >= 55) {
        return "Cukup";
    } else {
        return "Kurang";
    }
}

// Tampilkan data dengan foreach
echo "<h2>Daftar Nilai Mahasiswa</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>No</th><th>Nama</th><th>Nilai</th><th>Kategori</th><th>Status</th></tr>";

$no = 1;
foreach ($mahasiswa as $mhs) {
    echo "<tr>";
    echo "<td>$no</td>";
    echo "<td>".$mhs['nama']."</td>";
    echo "<td>".$mhs['nilai']."</td>";
    echo "<td>".kategori($mhs['nilai'])."</td>";

    // Percabangan status lulus/tidak
    if ($mhs['nilai'] >= 75) {
        echo "<td>Lulus</td>";
    } else {
        echo "<td>Tidak Lulus</td>";
    }

    echo "</tr>";
    $no++;
}
echo "</table>";

// Contoh perulangan tambahan (for): tampilkan garis pemisah
echo "<br/><b>Hitungan for loop:</b><br/>";
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i <br/>";
}
?>