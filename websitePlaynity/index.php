<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Playnity Store</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="script.js"></script>
</head>
<body>

<header class="main-header">
  <div class="logo">Playnity</div>
  <nav class="nav-bar">
    <a href="index.php" class="active">Home</a>
    <a href="about.php">About</a>
    <a href="product.php">Product</a>
  </nav>
</header>

<section class="hero">
  <div class="hero-content"> 
    <h1>Selamat Datang di <span class="highlight">Playnity Store!</span></h1>
    <p>Temukan berbagai mainan menarik, edukatif, dan aman untuk buah hati Anda.  
       Mari ciptakan dunia bermain yang penuh tawa dan imajinasi!</p>
  </div>
</section>

<section class="products">
  <div class="container">
    <h2>Mainan Terbaru</h2>
    <div class="product-list-home">
      <?php
      $featured = array_slice($products, 0, 5);  
      foreach ($featured as $p):
      ?>
        <div class="card">
          <img src="<?= $p['image'] ?>" alt="<?= $p['name'] ?>">
          <h3><?= $p['name'] ?></h3>
          <p>Rp<?= number_format($p['price'], 0, ',', '.') ?></p>
          <a href="detail.php?id=<?= $p['id'] ?>">Lihat Detail</a>
        </div>
      <?php endforeach; ?>
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