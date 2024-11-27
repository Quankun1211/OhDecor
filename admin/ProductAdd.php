<?php
  include '../class/productClass.php';
?>
<?php
  $product = new Product();
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category_id = $_POST['category_id'];
    $brand_id = $_POST['brand_id'];
    $product_name = $_POST['product_name'];
    $product_code = $_POST['product_code'];
    $product_price = $_POST['product_price'];
    $product_size = $_POST['product_size'];
    $product_type = $_POST['product_type'];
    $product_material = $_POST['product_material'];
    $product_color = $_POST['product_color'];
    $product_quantity = $_POST['product_quantity'];
    $product_image = $_FILES["product_image"]["name"];
    $tempname = $_FILES["product_image"]["tmp_name"];
    $folder = "uploads/" . $product_image;
    $product_description = $_POST['product_description'];

    move_uploaded_file($tempname, $folder);
    $insert_product = $product->insert_product($category_id, $brand_id, $product_name, $product_code, $product_price, $product_size, $product_type, $product_material, $product_color, $product_quantity, $product_image, $product_description);
    header("Location:ProductAdd.php?act=addProd");
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
        <form action="" method="post" enctype="multipart/form-data">
          <div class="wrap-input">
            <span>Tên danh mục <span style="color: red;">*</span></span>
            <select name="category_id" id="category_id">
              <option value="">--Chọn danh mục--</option>
              <?php 
                $show_category = $product->show_category();
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
            <select name="brand_id" id="brand_id">
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
          <i class="wrap-input">
            <span>Ảnh sản phẩm <span style="color: red;">*</span></span>
            <input type="file" name="product_image" value="" />
          </i>
          <i class="wrap-input">
            <span>Mô tả sản phẩm <span style="color: red;">*</span></span>
            <textarea style="padding:10px;" name="product_description" id=""></textarea>
          </i>
          <button class="btn">Thêm</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $("#category_id").change(function() {
        var x = $(this).val()
        $.get("ProductAdd_ajax.php", {category_id:x}, function(data) {
          $("#brand_id").html(data)
        })
      })
    })
  </script>

</body>
</html>