<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <form method="post" action="proses_lanjut.php">
        <label for="buah">Pilih Buah:</label>
        <select name="buah" id="buah">
            <option value="Apel">Apel</option>
            <option value="Pisang">Pisang</option>
            <option value="Mangga">Mangga</option>
            <option value="Jeruk">Jeruk</option>
        </select>

        <br>

        <label>Pilih Warna Favorit:</label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>

        <br>

        <label>Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>

        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBuah = $_POST['buah'];

    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna']; // Array
    } else {
        $selectedWarna = []; 
    }

    $selectedJenisKelamin = $_POST['jenis_kelamin'];
    
    echo "Anda memilih buah: " . $selectedBuah . " <br>";
    
    if (empty($selectedWarna)) {
        echo "Anda tidak memilih warna favorit.<br>";
    } else {
        echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . " <br>";
    }

    echo "Jenis kelamin Anda: " . $selectedJenisKelamin . " <br>";
}
?>