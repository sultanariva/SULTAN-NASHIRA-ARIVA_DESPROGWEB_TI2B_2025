<?php
$hargaProduk = 120000;
$batasDiskon = 100000;
$persentaseDiskon = 0.20; 

$hargaAkhir = $hargaProduk; 

if ($hargaProduk > $batasDiskon) {
    $jumlahDiskon = $hargaProduk * $persentaseDiskon;
    $hargaAkhir = $hargaProduk - $jumlahDiskon;
    
    echo "Harga Produk: Rp " . $hargaProduk . "<br>";
    echo "Diskon (" . ($persentaseDiskon * 100) . "%): Rp " . $jumlahDiskon . "<br>";
    echo "====================================<br>";
} else {
    echo "Harga Produk: Rp " . $hargaProduk . "<br>";
    echo "Diskon: Rp 0<br>";
    echo "====================================<br>";
}

echo "Harga yang harus dibayar: Rp " . $hargaAkhir;
?>