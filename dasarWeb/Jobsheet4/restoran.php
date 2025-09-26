<?php
$totalKursi = 45;

$kursiDitempati = 28;

$kursiKosong = $totalKursi - $kursiDitempati;

$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah total kursi: " . $totalKursi . "<br>";
echo "Jumlah kursi yang ditempati: " . $kursiDitempati . "<br>";
echo "Jumlah kursi yang masih kosong: " . $kursiKosong . "<br>";
echo "Persentase kursi yang masih kosong: " . $persentaseKosong . "%";
?>