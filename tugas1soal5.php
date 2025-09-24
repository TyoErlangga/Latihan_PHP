<?php
echo "<h2>Contoh Percabangan / Logika PHP</h2>";

/* 1. Login Sederhana */
$user = "admin";
$pass = "12345";

echo "<b>1. Login:</b><br/>";
if ($user == "admin" && $pass == "12345") {
    echo "Login berhasil!<br/><br/>";
} else {
    echo "Login gagal!<br/><br/>";
}

/* 2. Cek Kelulusan */
$nilai = 80;
echo "<b>2. Kelulusan:</b><br/>";
if ($nilai >= 75) {
    echo "Nilai $nilai → Lulus<br/><br/>";
} else {
    echo "Nilai $nilai → Tidak Lulus<br/><br/>";
}

/* 3. Kategori Usia */
$usia = 25;
echo "<b>3. Kategori Usia:</b><br/>";
if ($usia < 12) {
    echo "Anak-anak<br/><br/>";
} elseif ($usia < 18) {
    echo "Remaja<br/><br/>";
} elseif ($usia < 60) {
    echo "Dewasa<br/><br/>";
} else {
    echo "Lansia<br/><br/>";
}

/* 4. Diskon Belanja */
$totalBelanja = 200000;
echo "<b>4. Diskon Belanja:</b><br/>";
if ($totalBelanja >= 150000) {
    $diskon = $totalBelanja * 0.1; // 10%
    echo "Total: Rp$totalBelanja → Diskon Rp$diskon<br/><br/>";
} else {
    echo "Total: Rp$totalBelanja → Tidak dapat diskon<br/><br/>";
}

/* 5. Cek Hari dengan Switch */
$hari = "Sabtu";
echo "<b>5. Cek Hari:</b><br/>";
switch ($hari) {
    case "Senin": echo "Hari kerja, semangat produktif!<br/>"; break;
    case "Sabtu": echo "Hari libur, waktunya istirahat!<br/>"; break;
    case "Minggu": echo "Hari keluarga, nikmati kebersamaan!<br/>"; break;
    default: echo "Hari biasa.<br/>";
}
?>