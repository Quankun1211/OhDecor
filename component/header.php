<?php
    if(!isset($_SESSION['user_name'])) {
      session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style2.css">
  <link rel="stylesheet" href="../css/grid.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>
<body>
  <div class="app">
    <header class="header">
      <div class="container">
        <a href="../content/main.php"><img class="logo" src="../img/logo.webp" alt=""></a>
        <ul class="list-navbar">
          <li>
            <a href="">Trang chủ</a>
          </li>
          <li>
            <a href="">Về chúng tôi</a>
          </li>
          <li>
            <a href="">Sản phẩm</a>
            <i class="fa-solid fa-chevron-down"></i>
            <ul class="list-child">
              <li>a</li>
              <li>a</li>
              <li>a</li>
            </ul>
          </li>
          <li>
            <a href="">Blog</a>
            <i class="fa-solid fa-chevron-down"></i>
            <ul class="list-child">
              <li>a</li>
              <li>a</li>
              <li>a</li>
            </ul>
          </li>
          <li>
            <a href="">Hệ thống</a>
          </li>
          <li>
            <a href="">Dự án</a>
            <i class="fa-solid fa-chevron-down"></i>
            <ul class="list-child">
              <li>a</li>
              <li>a</li>
              <li>a</li>
            </ul>
          </li>
        </ul>
        <div class="search-header">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Tìm kiếm sản phẩm">
        </div>
        <div class="user-form">
            <?php
              if(isset($_SESSION['user_name'])) {
            ?>
            <i class="fa-regular fa-face-smile">
              <ul class="list-user">
                <li><a class="link-user" href="../content/logout.php">đăng xuất</a></li>
              </ul>
            </i>
            <?php
              } else {
            ?>
            <i class="fa-solid fa-user">
              <ul class="list-user">
                <li><a class="link-user" href="../content/register.php">đăng ký</a></li>
                <li><a class="link-user" href="../content/login.php">đăng nhập</a></li>
                </ul>
            </i>
          <?php
          }?>
          <i class="fa-solid fa-shop"></i>
        </div>
      </img>
    </header>