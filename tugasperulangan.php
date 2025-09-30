<?php
do {
    // Minta input dari user
    echo "Masukkan angka antara 1 - 10: ";
    $input = trim(fgets(STDIN)); // baca input dari keyboard
    
    // Kontrol: cek apakah input valid
    if ($input >= 1 && $input <= 10) {
        echo "✔️ Input benar: $input\n";
        $valid = true;
    } else {
        echo "❌ Input salah, coba lagi!\n";
        $valid = false;
    }

} while (!$valid); // perulangan berhenti jika input valid
?>