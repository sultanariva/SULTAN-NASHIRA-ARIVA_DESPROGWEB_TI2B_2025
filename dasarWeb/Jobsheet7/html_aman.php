<!DOCTYPE html>
<html>
<head>
    <title>Form HTML Aman</title>
</head>
<body>
    <form method="post" action="">
        Masukkan teks: <input type="text" name="input" 
            value="<?php echo isset($_POST['input']) ? htmlspecialchars($_POST['input'], ENT_QUOTES, 'UTF-8') : ''; ?>">
        <br><br>
        Masukkan email: <input type="text" name="email" 
            value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : ''; ?>">
        <br><br>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Gunakan null coalescing operator untuk mencegah error jika key tidak ada
        $input = $_POST['input'] ?? '';
        $email = $_POST['email'] ?? '';

        // Amankan dari HTML Injection hanya jika tidak null
        $input = htmlspecialchars($input ?? '', ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($email ?? '', ENT_QUOTES, 'UTF-8');

        echo "<p>Hasil input aman: $input</p>";

        // Validasi email hanya jika kolom diisi
        if (!empty($email)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p style='color:green;'>Email valid: $email</p>";
            } else {
                echo "<p style='color:red;'>Email tidak valid!</p>";
            }
        } else {
            echo "<p style='color:orange;'>Silakan isi alamat email.</p>";
        }
    }
    ?>
</body>
</html>
