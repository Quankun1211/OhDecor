<?php
  include '../class/brandClass.php';
?>
<?php
  $brand_id = $_GET['brand_id'];
  $brand = new Brand();
  $get_brand_name = $brand->get_brand($brand_id);
  $res_brand = $get_brand_name->fetch_assoc();
  $brand_name = $res_brand['brand_name'];
  $category_id = $res_brand['category_id'];

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category_id_update = $_POST['category_id'];
    $brand_name_update = $_POST['brand_name'];

    $brand_update = $brand->update_brand($brand_id, $category_id_update, $brand_name_update);
    header("Location:adminBrand.php");
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
          <select name="category_id" id="">
            <?php
              $get_category = $brand->show_category_id($category_id);
              $res_cat = $get_category->fetch_assoc();
            ?>
            <option value="<?php echo $category_id ?>"><?php echo $res_cat['category_name']; ?></option>
            <?php
              $get_cat_ajax = $brand->get_category_ajax($category_id);
              if($get_cat_ajax) {
                while($res_cat_ajax = $get_cat_ajax->fetch_assoc()) {
            ?>
            <option value="<?php echo $res_cat_ajax['category_id']; ?>"><?php echo $res_cat_ajax['category_name']; ?></option>
            <?php
                }
              }
            ?>
          </select>
        </div>
        <div class="wrap-input">
          <span>Tên nhãn sản phẩm <span style="color: red;">*</span></span>
          <input type="text" placeholder="Nhập nhãn sản phẩm" name="brand_name" value="<?php echo $brand_name ?>">
        </div>
        <button class="btn">Sửa</button>
      </form>
    </div>
  </div>
</div>