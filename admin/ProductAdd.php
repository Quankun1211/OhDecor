<?php
  include '../class/productClass.php.php';
?>
<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./admin.css">
  <title>Document</title>
</head>
<body>
  <header>
    <h1><a href="">AdminPage</a></h1>
    <h1><a href="">MainPage</a></h1>
  </header>
  <div class="container">
    <div class="left-side">
      <div class="col">
        <a href="" class="">Danh mục sản phẩm</a>
        <ul class="list-admin">
          <li><a href="CategoryAdd.php">Thêm danh mục</a></li>
          <li><a href="BrandAdd.php" >Thêm nhãn sản phẩm</a></li>
          <li><a href="ProductAdd.html" class="active">Thêm sản phẩm</a></li>
        </ul>
      </div>
    </div>
    <div class="right-side">
      <div class="col">
        <form action="" method="">
          <div class="wrap-input">
            <span>Tên danh mục <span style="color: red;">*</span></span>
            <select name="category_name" id="">
              <option value="">--Chọn danh mục--</option>
            </select>
          </div>
          <div class="wrap-input">
            <span>Tên nhãn sản phẩm <span style="color: red;">*</span></span>
            <select name="brand_name" id="">
              <option value="">--Chọn nhãn sản phẩm--</option>
            </select>
          </div>
          <div class="wrap-input">
            <span>Tên sản phẩm <span style="color: red;">*</span></span>
            <input type="text" placeholder="Nhập sản phẩm" name="product_name">
          </div>
          <div class="wrap-input">
            <span>Mã sản phẩm <span style="color: red;">*</span></span>
            <input type="text" placeholder="Mã sản phẩm" name="product_code">
          </div>
          <div class="wrap-input">
            <span>Giá sản phẩm <span style="color: red;">*</span></span>
            <input type="text" placeholder="Giá sản phẩm" name="product_price">
          </div>
          <div class="wrap-input">
            <span>Kích thước sản phẩm <span style="color: red;">*</span></span>
            <input type="text" placeholder="Kích thước sản phẩm" name="product_size">
          </div>
          <div class="wrap-input">
            <span>Quy cách sản phẩm <span style="color: red;">*</span></span>
            <input type="text" placeholder="Quy cách sản phẩm" name="product_type">
          </div>
          <div class="wrap-input">
            <span>Chất liệu sản phẩm <span style="color: red;">*</span></span>
            <input type="text" placeholder="Chất liệu sản phẩm" name="product_material">
          </div>
          <div class="wrap-input">
            <span>Màu sắc sản phẩm <span style="color: red;">*</span></span>
            <input type="text" placeholder="Màu sắc sản phẩm" name="product_color">
          </div>
          <div class="wrap-input">
            <span>Số lượng sản phẩm <span style="color: red;">*</span></span>
            <input type="text" placeholder="Số lượng sản phẩm" name="product_quantity">
          </div>
          <button class="btn">Thêm</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>