<?php 
  include '../class/categoryClass.php';
?>
<?php
  $category = new Category;
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category_name = $_POST['category_name'];
    $insert_category = $category->insert_category($category_name);
    header("Location:CategoryAdd.php?act=addCat");
  }
?>

<?php
  include 'headerAdmin.php';
?>
  <div class="container">
  <?php
      include "../component/leftSideAdmin.php";
    ?>
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