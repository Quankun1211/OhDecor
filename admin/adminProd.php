<?php
  include '../class/productClass.php';
?>
<?php
  $product = new Product();
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
          <a href="adminProd.php" class="active">Danh sách sản phẩm</a>
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
            <th>Danh mục</th>
            <th>Nhãn sản phẩm</th>
            <th>Sản phẩm</th>
            <th>Lựa chọn</th>
          </tr>
          <?php
            $show_product = $product->show_product();
            if($show_product) {
              while($res = $show_product->fetch_array()) {
                $category_id = $res['category_id'];
                $brand_id = $res['brand_id'];
          ?>
          <tr>
            <td>
              <?php 
                  $show_category = $product->show_category_id($category_id);
                  $res_category = $show_category->fetch_assoc();
                  echo $res_category['category_name'];
              ?>
            </td>
            <td>
              <?php 
                  $show_brand = $product->show_brand_id($brand_id);
                  $res_brand = $show_brand->fetch_assoc();
                  echo $res_brand['brand_name'];
              ?>
            </td>
            <td><?php echo $res['product_name']; ?></td>
            <th>
              <a href="ProductUpdate.php?product_id=<?php echo $res['product_id']; ?>">Sửa</a>
              <a href="">Xóa</a>
            </th>
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