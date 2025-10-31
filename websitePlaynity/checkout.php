<?php
$product = $_POST ?? [];
$submitted = isset($_POST['submit']);
$errors = [];

if ($submitted) {
  if (empty($_POST['nama']) || !preg_match("/^[a-zA-Z\s]{3,}$/", $_POST['nama'])) {
    $errors['nama'] = "Nama minimal 3 huruf dan tidak boleh mengandung angka/simbol.";
  }

  if (empty($_POST['telepon']) || !preg_match("/^[0-9]{10,14}$/", $_POST['telepon'])) {
    $errors['telepon'] = "Nomor telepon hanya boleh berisi angka (10–14 digit).";
  }

  if (empty($_POST['alamat']) || strlen($_POST['alamat']) < 10) {
    $errors['alamat'] = "Alamat terlalu pendek. Mohon tuliskan alamat lengkap Anda.";
  }

  if (empty($_POST['kota']) || !preg_match("/^[a-zA-Z\s]+$/", $_POST['kota'])) {
    $errors['kota'] = "Nama kota hanya boleh berisi huruf.";
  }

  if (empty($_POST['provinsi']) || !preg_match("/^[a-zA-Z\s]+$/", $_POST['provinsi'])) {
    $errors['provinsi'] = "Nama provinsi hanya boleh berisi huruf.";
  }

  if (empty($errors)) {
    $submitted = true;
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Checkout - Playnity</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="script.js"></script>
</head>

<body>
<header class="main-header">
  <div class="logo">Playnity</div>
  <nav class="nav-bar">
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="product.php">Product</a>
  </nav>
</header>

<section class="checkout">
  <?php if (!$submitted): ?>
  <form method="post" id="checkoutForm">
    <h2>Informasi Pelanggan</h2>
    <input type="hidden" name="product_name" value="<?= htmlspecialchars($product['name'] ?? '') ?>">
    <input type="hidden" name="product_price" value="<?= htmlspecialchars($product['price'] ?? 0) ?>">

    <label>Nama*</label>
    <input type="text" name="nama" id="nama" value="<?= htmlspecialchars($_POST['nama'] ?? '') ?>" placeholder="Masukkan nama lengkap Anda">
    <small id="error-nama" class="error-msg"><?= $errors['nama'] ?? '' ?></small>

    <label>Nomor Telepon*</label>
    <input type="text" name="telepon" id="telepon" value="<?= htmlspecialchars($_POST['telepon'] ?? '') ?>" placeholder="Contoh: 081234567890">
    <small id="error-telepon" class="error-msg"><?= $errors['telepon'] ?? '' ?></small>

    <label>Alamat*</label>
    <textarea name="alamat" id="alamat" placeholder="Tuliskan alamat lengkap Anda"><?= htmlspecialchars($_POST['alamat'] ?? '') ?></textarea>
    <small id="error-alamat" class="error-msg"><?= $errors['alamat'] ?? '' ?></small>

    <label>Kota*</label>
    <input type="text" name="kota" id="kota" value="<?= htmlspecialchars($_POST['kota'] ?? '') ?>">
    <small id="error-kota" class="error-msg"><?= $errors['kota'] ?? '' ?></small>

    <label>Provinsi*</label>
    <input type="text" name="provinsi" id="provinsi" value="<?= htmlspecialchars($_POST['provinsi'] ?? '') ?>">
    <small id="error-provinsi" class="error-msg"><?= $errors['provinsi'] ?? '' ?></small>

    <label>Catatan</label>
    <input type="text" name="catatan" id="catatan" placeholder="Opsional">

    <button type="submit" name="submit">Place Order</button>
  </form>

  <div class="summary">
    <h3>Pratinjau Pesanan</h3>
    <p><?= $product['name'] ?? '-' ?></p>
    <p>Total: Rp<?= number_format($product['price'] ?? 0, 0, ',', '.') ?></p>
  </div>

  <?php else: ?>
  <div class="output">
    <h2>Pesanan Berhasil!</h2>
    <p><strong>Nama:</strong> <?= $_POST['nama'] ?></p>
    <p><strong>Telepon:</strong> <?= $_POST['telepon'] ?></p>
    <p><strong>Alamat:</strong> <?= $_POST['alamat'] ?>, <?= $_POST['kota'] ?>, <?= $_POST['provinsi'] ?></p>
    <p><strong>Produk:</strong> <?= $_POST['product_name'] ?></p>
    <p><strong>Total Bayar:</strong> Rp<?= number_format($_POST['product_price'], 0, ',', '.') ?></p>
    <p><strong>Catatan:</strong> <?= $_POST['catatan'] ?></p>
  </div>
  <?php endif; ?>
</section>

<footer>
  <div class="footer-content">
    <div class="footer-col">
      <h4>Contact Us</h4>
      <p>
        <strong>WhatsApp:</strong> 081922190320<br>
        <strong>Office:</strong> Jl. Soekarno Hatta No.03, Lowokwaru, Malang<br>
        <strong>Weekday:</strong> 08:00 - 21:00 WIB<br>
        <strong>Weekend:</strong> 09:00 - 20:00 WIB
      </p>
    </div>

    <div class="footer-col">
      <h4>Our Socmed</h4>
      <ul class="social-list">
        <li><img src="img/facebook.png" class="social-icon"> Playnity Store</li>
        <li><img src="img/x.png" class="social-icon"> @PlaynityStore</li>
        <li><img src="img/instagram.png" class="social-icon"> @playnity_store</li>
      </ul>
    </div>
  </div>
  <p class="copy">© 2025 Playnity Store Indonesia</p>
</footer>
</body>
</html>