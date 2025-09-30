<?php
$daftarSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0;
$jumlahSiswa = 0;

foreach ($daftarSiswa as $siswa) {
    $totalNilai += $siswa[1]; 
    $jumlahSiswa++;           
}

$rataRata = $totalNilai / $jumlahSiswa;

echo "Rata-Rata Nilai Kelas: " . $rataRata . "<br><br>";
echo "Daftar Siswa dengan Nilai di Atas Rata-Rata ($rataRata): <br>";
echo "====================================<br>";

foreach ($daftarSiswa as $siswa) {
    $nama = $siswa[0];
    $nilai = $siswa[1];
    
    if ($nilai > $rataRata) {
        echo "Nama: $nama, Nilai: $nilai <br>";
    }
}
?>