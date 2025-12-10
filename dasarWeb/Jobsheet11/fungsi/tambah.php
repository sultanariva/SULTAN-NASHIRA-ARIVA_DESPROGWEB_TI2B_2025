<?php
session_start();

if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    // Tambah Jabatan (form di halaman jabatan)
    if (!empty($_GET['jabatan']) && $_GET['jabatan'] === 'tambah') {
        $jabatan = antiinjection($koneksi, $_POST['jabatan'] ?? '');
        $keterangan = antiinjection($koneksi, $_POST['keterangan'] ?? '');

        $query = "INSERT INTO jabatan (jabatan,keterangan) VALUES ('$jabatan', '$keterangan')";

        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Baru Ditambahkan.");
        } else {
            pesan('danger', "Menambahkan Jabatan Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");
        exit;
    }

    // Tambah Anggota (form di halaman anggota)
    if (!empty($_GET['anggota']) && $_GET['anggota'] === 'tambah') {
        $username = antiinjection($koneksi, $_POST['username'] ?? '');
        $password = antiinjection($koneksi, $_POST['password'] ?? '');
        $level = antiinjection($koneksi, $_POST['level'] ?? 'user');
        $jabatan_id = antiinjection($koneksi, $_POST['jabatan'] ?? '');
        $nama = antiinjection($koneksi, $_POST['nama'] ?? '');
        $jenis_kelamin = antiinjection($koneksi, $_POST['jenis_kelamin'] ?? 'L');
        $alamat = antiinjection($koneksi, $_POST['alamat'] ?? '');
        $no_telp = antiinjection($koneksi, $_POST['no_telp'] ?? '');

        // Hash password with random salt
        try {
            $salt = bin2hex(random_bytes(16));
        } catch (Exception $e) {
            $salt = bin2hex(openssl_random_pseudo_bytes(16));
        }
        $combined_password = $salt . $password;
        $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);

        $query = "INSERT INTO user (username, password, salt, level) VALUES ('$username', '$hashed_password', '$salt', '$level')";
        if (mysqli_query($koneksi, $query)) {
            $last_id = mysqli_insert_id($koneksi);
            $query2 = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp, user_id, jabatan_id) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp', '$last_id', '$jabatan_id')";
            if (mysqli_query($koneksi, $query2)) {
                pesan('success', "Anggota Baru Ditambahkan.");
            } else {
                pesan('warning', "Gagal Menambahkan Anggota Tetapi Data Login Tersimpan Karena: " . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', "Menambahkan Anggota Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=anggota");
        exit;
    }
}
?>