<?php
// Percabangan
$nilai = 82;
if ($nilai >= 90) {
    echo "Grade A<br/>";
} elseif ($nilai >= 75) {
    echo "Grade B<br/>";
} else {
    echo "Grade C<br/>";
}

// Perulangan For
for ($i=1; $i<=3; $i++) {
    echo "For loop ke-$i<br/>";
}

// Perulangan While
$i=1;
while ($i<=3) {
    echo "While loop ke-$i<br/>";
    $i++;
}

// Perulangan Do While
$i=1;
do {
    echo "Do While loop ke-$i<br/>";
    $i++;
} while ($i<=3);

// Foreach
$warna = ["Merah","Hijau","Biru"];
foreach ($warna as $w) {
    echo "Warna: $w <br/>";
}
?>