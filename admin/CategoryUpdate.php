<?php
  include '../class/categoryClass.php';
?>
<?php
  $category = new Category();
  $category_id = $_GET['category_id'];
  $category_name = $category->get_category($category_id);
  $res_cat = $category_name->fetch_assoc();

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category_name_update = $_POST['category_name'];
    $update_category = $category->update_category($category_id, $category_name_update);
    header("Location:adminCat.php");
  }
?>


<?php
  include 'headerAdmin.php';
?>
  <div class="container">
    <div class="left-side">
      <div class="col">
        <div class="list-select">
          <a href="adminCat.php" class="">Danh sách danh mục</a>
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
            <input class="category_name" type="text" placeholder="Nhập tên danh mục" name="category_name" value="<?php echo $res_cat['category_name']; ?>">
          </div>
          <button class="btn">Sửa</button>
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