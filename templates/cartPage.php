<!DOCTYPE html>
<html lang="de">
<head>
  <title>Vitalij Fotography</title>
  <base href="<?= $baseUrl ?>">
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<?php include __DIR__.'/navbar.php'?>
<header class="jumbotron">
<div class="container">
<h1>Willkommen auf meinem Online Shop</h1>
</div>
</header>

<section class="container" id="cartItems">
  <?php foreach($cartItems as $cartItem):?>
  <div class="row">
      <?php include __DIR__.'/cartItem.php';?>
  </div>
  <?php endforeach;?>
</section>
<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
