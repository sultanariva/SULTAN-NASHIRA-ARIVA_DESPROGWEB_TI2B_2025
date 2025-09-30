<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tampilan Array Asosiatif</title>
</head>
<body>
<?php
$Dosen = [
    'nama'          => 'Elok Nur Hamdana',
    'domisili'      => 'Malang',
    'jenis_kelamin' => 'Perempuan' 
];

echo "<table style='border: 1px solid #ccc; border-collapse: collapse; width: 40%; font-family: Arial, sans-serif;'>";
echo "<tr><td colspan='2' style='background-color: #f2f2f2; padding: 10px; border: 1px solid #ccc;'><strong>Data Dosen</strong></td></tr>";

echo "<tr>";
echo "<td style='padding: 8px; border: 1px solid #ccc; width: 35%; background-color: #f9f9f9;'><strong>Nama</strong></td>";
echo "<td style='padding: 8px; border: 1px solid #ccc;'>{$Dosen['nama']}</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='padding: 8px; border: 1px solid #ccc; width: 35%; background-color: #f9f9f9;'><strong>Domisili</strong></td>";
echo "<td style='padding: 8px; border: 1px solid #ccc;'>{$Dosen['domisili']}</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='padding: 8px; border: 1px solid #ccc; width: 35%; background-color: #f9f9f9;'><strong>Jenis Kelamin</strong></td>";
echo "<td style='padding: 8px; border: 1px solid #ccc;'>{$Dosen['jenis_kelamin']}</td>";
echo "</tr>";

echo "</table>";
?>
</body>
</html>