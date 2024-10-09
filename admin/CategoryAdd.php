<?php 
  include '../class/categoryClass.php';
?>
<?php
  $category = new Category;
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category_name = $_POST['category_name'];
    $insert_category = $category->insert_category($category_name);
  }
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
          <li><a href="CategoryAdd.php" class="active">Thêm danh mục</a></li>
          <li><a href="BrandAdd.php">Thêm nhãn sản phẩm</a></li>
          <li><a href="ProductAdd.html">Thêm sản phẩm</a></li>
        </ul>
      </div>
    </div>
    <div class="right-side">
      <div class="col">
        <form action="" method="post">
          <div class="wrap-input">
            <span>Tên danh mục <span style="color: red;">*</span></span>
            <input class="category_name" type="text" placeholder="Nhập tên danh mục" name="category_name">
          </div>
          <button class="btn">Thêm</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    const btn = document.querySelector(".btn")
    const category = document.querySelector(".category_name")

    btn.onclick = (e) => {
      if(category.value == "") {
        e.preventDefault();
      }
    }
  </script>
</body>
</html>