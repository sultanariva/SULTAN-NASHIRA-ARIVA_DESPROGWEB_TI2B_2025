<?php
$skorPemain = 650; 
$batasHadiah = 500;

$statusHadiah = ($skorPemain > $batasHadiah) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: " . $skorPemain . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $statusHadiah;
?>