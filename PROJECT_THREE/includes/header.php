<?php
$current = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Darry's Grand Hotel</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="site-header">
  <div class="header-inner">
    <div class="logo">Darry's<span> Grand</span></div>
    <nav>
      <ul>
        <li><a href="index.php"   class="<?= ($current=='index.php')   ?'active':'' ?>">Home</a></li>
        <li><a href="about.php"   class="<?= ($current=='about.php')   ?'active':'' ?>">About Us</a></li>
        <li><a href="menu.php"    class="<?= ($current=='menu.php')    ?'active':'' ?>">Menu</a></li>
        <li><a href="order.php"   class="<?= ($current=='order.php')   ?'active':'' ?>">Order</a></li>
        <li><a href="gallery.php" class="<?= ($current=='gallery.php') ?'active':'' ?>">Gallery</a></li>
        <li><a href="contact.php" class="<?= ($current=='contact.php') ?'active':'' ?>">Contact Us</a></li>
      </ul>
    </nav>
  </div>
</header>
