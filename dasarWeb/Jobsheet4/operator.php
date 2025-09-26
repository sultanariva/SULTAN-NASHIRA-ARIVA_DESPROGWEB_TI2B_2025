<?php

$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penambahan: " . $hasilTambah . "<br>";
echo "Hasil Pengurangan: " . $hasilKurang . "<br>";
echo "Hasil Perkalian: " . $hasilKali . "<br>";
echo "Hasil Pembagian: " . $hasilBagi . "<br>";
echo "Sisa Hasil Bagi: " . $sisaBagi . "<br>";
echo "Hasil Pangkat: " . $pangkat . "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Perbandingan Sama: " . $hasilSama . "<br>";
echo "Hasil Perbandingan Tidak Sama: " . $hasilTidakSama . "<br>";
echo "Hasil Perbandingan Lebih Kecil: " . $hasilLebihKecil . "<br>";
echo "Hasil Perbandingan Lebih Besar: " . $hasilLebihBesar . "<br>";
echo "Hasil Perbandingan Lebih Kecil Sama: " . $hasilLebihKecilSama . "<br>";
echo "Hasil Perbandingan Lebih Besar Sama: " . $hasilLebihBesarSama . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil Perbandingan AND: " . $hasilAnd . "<br>";
echo "Hasil Perbandingan OR: " . $hasilOr . "<br>";
echo "Hasil Perbandingan NOT A: " . $hasilNotA . "<br>";
echo "Hasil Perbandingan NOT B: " . $hasilNotB . "<br>";

$a += $b;
echo "Hasil +=: " . $a . "<br>";

$a = 10; 
$a -= $b; 
echo "Hasil -=: " . $a . "<br>";

$a = 10; 
$a *= $b; 
echo "Hasil *=: " . $a . "<br>";

$a = 10; 
$a /= $b; 
echo "Hasil /=: " . $a . "<br>";

$a = 10;
$a %= $b; 
echo "Hasil %=: " . $a . "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Perbandingan Identik: " . $hasilIdentik . "<br>";
echo "Hasil Perbandingan Tidak Identik: " . $hasilTidakIdentik . "<br>";
?>