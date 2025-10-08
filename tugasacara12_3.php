<?php
// Soal 3
$produk = [
    ["nama" => "Laptop X", "kategori" => "Elektronik", "harga" => 8500000, "rating" => 4.7],
    ["nama" => "Sneakers Z", "kategori" => "Fashion", "harga" => 1200000, "rating" => 4.5],
    ["nama" => "Smartphone Y", "kategori" => "Elektronik", "harga" => 9500000, "rating" => 4.8]
];

// Cari produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $p) {
    if ($p["harga"] > $tertinggi["harga"]) {
        $tertinggi = $p;
    }
}

echo "Produk dengan harga tertinggi:<br>";
echo "Nama: " . $tertinggi["nama"] . "<br>";
echo "Kategori: " . $tertinggi["kategori"] . "<br>";
echo "Harga: Rp " . number_format($tertinggi["harga"], 0, ',', '.') . "<br>";
echo "Rating: " . $tertinggi["rating"];
?>