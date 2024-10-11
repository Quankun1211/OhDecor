<?php
  include '../class/productClass.php';
?>
<?php
  $product = new Product();
  $product_id = $_GET['product_id'];
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

    $update_product = $product->update_product( $product_id, $category_id, $brand_id, $product_name, $product_code, $product_price, $product_size, $product_type, $product_material, $product_color, $product_quantity);
    header("Location:admin.php");
  }
  $get_product = $product->get_product($product_id);
  $res = $get_product->fetch_assoc();
  $category_id = $res['category_id'];
  $brand_id = $res['brand_id'];
?>
<?php
  include 'headerAdmin.php';
?>
  <div class="container">
    <div class="left-side">
      <div class="col">
        <a href="admin.php" class="active">Danh mục sản phẩm</a>
        <ul class="list-admin">
          <li><a href="CategoryAdd.php">Thêm danh mục</a></li>
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
            <select name="category_id" id="category_id">
                <?php
                 $show_category = $product->show_category_id($category_id);
                 $res_category = $show_category->fetch_assoc();
                 ?>
              <option value="<?php echo $res_category['category_id']; ?>">
                <?php echo $res_category['category_name']; ?>
              </option>
              <?php 
                $show_category = $product->get_category_ajax($category_id);
                if($show_category) {
                  while($res_cat = $show_category->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $res_cat['category_id'] ?>"><?php echo $res_cat['category_name']?></option>
                  <?php
                  }
                }
                ?>
            </select>
          </div>
          <div class="wrap-input">
            <span>Tên nhãn sản phẩm <span style="color: red;">*</span></span>
            <select name="brand_id" id="brand_id">
              <option value="">
                  <?php
                  $show_brand = $product->show_brand_id($brand_id);
                  $res_brand = $show_brand->fetch_assoc();
                  echo $res_brand['brand_name'];
                  ?>
              </option>
                
            </select>
          </div>
          <div class="wrap-input">
            <span>Tên sản phẩm <span style="color: red;">*</span></span>
            <input type="text" placeholder="Nhập sản phẩm" name="product_name" value="<?php echo $res['product_name']; ?>">
          </div>
          <div class="wrap-input">
            <span>Mã sản phẩm <span style="color: red;">*</span></span>
            <input type="text" placeholder="Mã sản phẩm" name="product_code" value="<?php echo $res['product_code']; ?>">
          </div>
          <div class="wrap-input">
            <span>Giá sản phẩm <span style="color: red;">*</span></span>
            <input type="text" placeholder="Giá sản phẩm" name="product_price" value="<?php echo $res['product_price']; ?>">
          </div>
          <div class="wrap-input">
            <span>Kích thước sản phẩm <span style="color: red;">*</span></span>
            <input type="text" placeholder="Kích thước sản phẩm" name="product_size" value="<?php echo $res['product_size']; ?>">
          </div>
          <div class="wrap-input">
            <span>Quy cách sản phẩm <span style="color: red;">*</span></span>
            <input type="text" placeholder="Quy cách sản phẩm" name="product_type" value="<?php echo $res['product_type']; ?>">
          </div>
          <div class="wrap-input">
            <span>Chất liệu sản phẩm <span style="color: red;">*</span></span>
            <input type="text" placeholder="Chất liệu sản phẩm" name="product_material" value="<?php echo $res['product_material']; ?>">
          </div>
          <div class="wrap-input">
            <span>Màu sắc sản phẩm <span style="color: red;">*</span></span>
            <input type="text" placeholder="Màu sắc sản phẩm" name="product_color" value="<?php echo $res['product_color']; ?>">
          </div>
          <div class="wrap-input">
            <span>Số lượng sản phẩm <span style="color: red;">*</span></span>
            <input type="text" placeholder="Số lượng sản phẩm" name="product_quantity" value="<?php echo $res['product_quantity']; ?>">
          </div>
          <button class="btn">Sửa</button>
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