<?php 
  include '../class/categoryClass.php';
?>
<?php
  $category = new Category;
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category_name = $_POST['category_name'];
    $insert_category = $category->insert_category($category_name);
    header("Location:index.php");
  }
?>

<?php
  include 'headerAdmin.php';
?>
  <div class="container">
    <div class="left-side">
      <div class="col">
        <div class="list-select">
          <a href="index.php" class="">Danh sách danh mục</a>
          <a href="adminBrand.php" class="">Danh sách nhãn sản phẩm</a>
          <a href="adminProd.php" class="">Danh sách sản phẩm</a>
        </div>
        <ul class="list-admin">
          <li><a href="CategoryAdd.php" class="active">Thêm danh mục</a></li>
          <li><a href="BrandAdd.php">Thêm nhãn sản phẩm</a></li>
          <li><a href="ProductAdd.php">Thêm sản phẩm</a></li>
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