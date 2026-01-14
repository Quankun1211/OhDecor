<?php
  include "../class/brandClass.php";
  $brand = new Brand();
?>
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
  <link rel="stylesheet" href="../css/test.css">
  <link rel="stylesheet" href="../css/productDetail.css">
  <link rel="stylesheet" href="../css/grid.css">
  <link rel="stylesheet" href="../css/gridProductCss.css">
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
            <a href="../content/main.php">Trang chủ</a>
          </li>
          <li>
            <a href="">Về chúng tôi</a>
          </li>
          <li>
            <a href="../content/productList.php">Sản phẩm</a>
            <i class="fa-solid fa-chevron-down"></i>
            <ul class="list-child">
              <?php
                  $show_category = $brand->show_category();
                  if($show_category) {
                    while($res = $show_category->fetch_assoc()) {
                ?>
                  <li>
                    <a href="../content/productListCat.php?category_id=<?php echo $res['category_id'] ?>" class="category-list"><?php echo $res['category_name'] ?></a>
                    <?php
                      $category_id = $res['category_id'];
                      $get_brand = $brand->get_category_brand($category_id);
                      if($get_brand) {
                        while($res_brand = $get_brand->fetch_assoc()) {
                    ?>
                      <a href="../content/productListBrand.php?brand_id=<?php echo $res_brand['brand_id'] ?>"><?php echo $res_brand['brand_name'] ?></a>
                    <?php
                        }
                      }
                    ?>
                  </li>
                <?php
                    }
                  }
                ?>
            </ul>
          </li>
          <li>
            <a href="">Blog</a>
          </li>
          <li>
            <a href="">Hệ thống</a>
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