<?php
$nama   = "Erlangga";   // String
$umur   = 21;           // Integer
$tinggi = 1.75;         // Float
$mahasiswa = true;      // Boolean
$hobi   = ["Coding", "Swim", "Music"]; // Array
$kosong = NULL;         // Null

echo "<h2>1. Variabel & Tipe Data</h2>";
echo "Nama: $nama <br/>";
echo "Umur: $umur <br/>";
echo "Tinggi: $tinggi m <br/>";
echo "Mahasiswa: " . ($mahasiswa ? "Ya" : "Tidak") . "<br/>";
echo "Hobi ke-1: " . $hobi[0] . "<br/>";
echo "Kosong: "; var_dump($kosong);
echo "<hr/>";

