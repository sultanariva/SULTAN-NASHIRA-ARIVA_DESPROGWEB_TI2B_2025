<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;
$index = 0; 

sort($nilaiSiswa);

foreach ($nilaiSiswa as $nilai) {
    
    if ($index >= 2 && $index <= 7) {
        $totalNilai += $nilai;
    }
    $index++;
}

echo "Total nilai yang digunakan untuk rata-rata: $totalNilai";
?>