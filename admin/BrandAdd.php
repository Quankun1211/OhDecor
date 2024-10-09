<?php
  include '../class/brandClass.php';
?>
<?php
  $brand = new Brand();
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $brand_name = $_POST['brand_name'];
    $category_id = $_POST['category_id'];
    $insert_brand = $brand->insert_brand($brand_name, $category_id);
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
          <li><a href="CategoryAdd.php">Thêm danh mục</a></li>
          <li><a href="BrandAdd.php" class="active">Thêm nhãn sản phẩm</a></li>
          <li><a href="ProductAdd.html">Thêm sản phẩm</a></li>
        </ul>
      </div>
    </div>
    <div class="right-side">
      <div class="col">
        <form action="" method="post">
          <div class="wrap-input">
            <span>Tên danh mục <span style="color: red;">*</span></span>
            <select name="category_id" id="">
              <option value="">--Chọn danh mục--</option>
              <?php 
                $show_category = $brand->show_category();
                if($show_category) {
                  while($res = $show_category->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $res['category_id'] ?>"><?php echo $res['category_name']?></option>
                  <?php
                  }
                }
                ?>
            </select>
          </div>
          <div class="wrap-input">
            <span>Tên nhãn sản phẩm <span style="color: red;">*</span></span>
            <input type="text" placeholder="Nhập nhãn sản phẩm" name="brand_name">
          </div>
          <button class="btn">Thêm</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>