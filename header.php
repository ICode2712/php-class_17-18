<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>

  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="assets/js/script.js"></script>
</head>
<body>

    <?php

        function is_active($check) {
            $requested_uri = $_SERVER["REQUEST_URI"];

            $search = strpos($requested_uri, $check);

            if ($search !== false) {
                return 'active';
            }
        }

        $menus = [
            'index' => 'Home',
            'about' => 'About',
            'gallery' => 'Gallery',
            'support' => 'Support',
            'contact' => 'Contact Us'
        ];

    ?> 
  
  <div class="container">

    <div class="header">
      <h1>This is Header</h1>
    </div>

    <div class="main-menu">
      <ul>
        <?php foreach($menus as $key => $value) : ?>
            <li><a  class="<?php echo is_active($key); ?>" href="<?php echo $key ?>.php"><?php echo $value; ?></a></li>
        <?php endforeach; ?>

        <!-- <li class="<?php echo is_active('index'); ?>"><a href="index.php">Home</a></li>
        <li class="<?php echo is_active('about'); ?>"><a href="about.php">About</a></li>
        <li><a href="">Gallery</a></li>
        <li><a href="">Support</a></li>
        <li class="<?php echo is_active('contact'); ?>"><a href="contact.php">Contact</a></li> -->
      </ul>
    </div>

    <div class="main-content">