<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Array Terindeks</h2>
<?php
$listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
$jumlah_dosen = count($listdosen);

for ($i = 0; $i < $jumlah_dosen; $i++) {
    echo $listdosen[$i] . "<br>";
}
?>
</body>
</html>