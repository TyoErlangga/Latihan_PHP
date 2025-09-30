<?php
echo "Bilangan dari 100 sampai 1000:<br>";

$jumlahGenap = 0;
$total = 0;

for ($i = 100; $i <= 1000; $i++) {
    echo $i . "<br>"; // tampilkan bilangan
    
    $total += $i; // akumulasi jumlah total
    
    // Kontrol: cek apakah genap
    if ($i % 2 == 0) {
        $jumlahGenap++;
    }
}

echo "<br>Jumlah bilangan genap antara 100–1000: $jumlahGenap<br>";
echo "Total penjumlahan semua bilangan: $total<br>";
?>