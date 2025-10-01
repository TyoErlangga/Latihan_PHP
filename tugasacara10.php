<?php
function terbesar($a, $b)
{
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

$bil1 = 100;
$bil2 = 150;

echo "Bilangan terbesar dari $bil1 dan $bil2 adalah: " . terbesar($bil1, $bil2);
?>


<?php
$today = getdate();
echo "Tanggal sekarang (getdate): " . $today["mday"] . "-" . $today["mon"] . "-" . $today["year"];
?>

<?php
echo "Tanggal sekarang (date): " . date("d-F-Y");
?>