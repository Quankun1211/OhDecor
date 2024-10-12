<?php
  include '../class/brandClass.php';
?>
<?php
  $brand = new Brand();
?>

<?php
  include 'headerAdmin.php';
?>
  <div class="container">
    <div class="left-side">
      <div class="col">
        <div class="list-select">
          <a href="adminCat.php" class="">Danh sách danh mục</a>
          <a href="adminBrand.php" class="active">Danh sách nhãn sản phẩm</a>
          <a href="adminProd.php" class="">Danh sách sản phẩm</a>
        </div>
        <ul class="list-admin">
          <li><a href="CategoryAdd.php">Thêm danh mục</a></li>
          <li><a href="BrandAdd.php">Thêm nhãn sản phẩm</a></li>
          <li><a href="ProductAdd.php">Thêm sản phẩm</a></li>
        </ul>
      </div>
    </div>
    <div class="right-side">
      <div class="col">
        <table>
          <tr>
            <td>STT</td>
            <td>Tên danh mục</td>
            <td>Tên nhãn sản phẩm</td>
          </tr>
          <?php
            $show_brand = $brand->show_brand();
            if($show_brand) {
              while($res = $show_brand->fetch_assoc()) {
                $category_id = $res['category_id'];
          ?>
          <tr>
            <td></td>
            <td>
              <?php
                $show_cat = $brand->show_category_id($category_id);
                $res_cat = $show_cat->fetch_assoc();
                echo $res_cat['category_name'];
                // echo $category_id;
              ?>
            </td>
            <td>
              <?php 
                echo $res['brand_name'];
              ?>
            </td>
          </tr>
          <?php
              }
            }
          ?>
        </table>
      </div>
    </div>
  </div>
  
</body>
</html>