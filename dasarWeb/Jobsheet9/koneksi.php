<?php
$host = "localhost"; 
$user = "root";      
$password = "";      
$database = "prakwebdb"; 

$connect = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()) {
    die ("Koneksi gagal: " . mysqli_connect_error());
}
?>