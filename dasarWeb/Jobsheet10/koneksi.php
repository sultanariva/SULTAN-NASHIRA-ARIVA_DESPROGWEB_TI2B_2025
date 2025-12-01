<?php
$koneksi = pg_connect("host=localhost port=5432 dbname=prakwebdb user=postgres password=1234");

if (!$koneksi) {
    die("Koneksi database gagal: " . pg_last_error());
}
?>