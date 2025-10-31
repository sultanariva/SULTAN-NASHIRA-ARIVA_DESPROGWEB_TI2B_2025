<?php
include 'data.php';
$id = $_GET['id'] ?? 1;
$product = null;
foreach ($products as $p) {
  if ($p['id'] == $id) $product = $p;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $product['name'] ?> - Playnity</title>
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
</header>>

<section class="detail">
  <div class="detail-container">
    <div class="image-container">
      <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" class="main-img">
    </div>

    <div class="info">
      <h1 class="product-name"><?= $product['name'] ?></h1>
      <p class="price">Rp<?= number_format($product['price'], 0, ',', '.') ?></p>
      <p class="desc"><?= $product['desc'] ?></p>
      <form action="checkout.php" method="post" class="checkout-form">
        <input type="hidden" name="name" value="<?= $product['name'] ?>">
        <input type="hidden" name="price" value="<?= $product['price'] ?>">
        <button type="submit" class="btn">Checkout Sekarang</button>
      </form>
    </div>
  </div>
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
        <li>
          <img src="img/facebook.png" alt="Facebook" class="social-icon">
          Playnity Store
        </li>
        <li>
          <img src="img/x.png" alt="X" class="social-icon">
          @PlaynityStore
        </li>
        <li>
          <img src="img/instagram.png" alt="Instagram" class="social-icon">
          @playnity_store
        </li>
      </ul>
    </div>
  </div>

  <p class="copy">© 2025 Playnity Store Indonesia</p>
</footer>
</body>
</html>
