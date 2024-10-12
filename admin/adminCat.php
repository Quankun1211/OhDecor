<?php
  include '../class/categoryClass.php';
?>
<?php
  $category = new Category();
?>

<?php
  include 'headerAdmin.php';
?>
  <div class="container">
    <div class="left-side">
      <div class="col">
        <div class="list-select">
          <a href="adminCat.php" class="active">Danh sách danh mục</a>
          <a href="adminBrand.php" class="">Danh sách nhãn sản phẩm</a>
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
          <td>Lựa chọn</td>
         </tr>
          <?php
          $show_category = $category->show_category();
          if($show_category) {
            $count = 1;
            while($res = $show_category->fetch_assoc()) {
              $category_id = $res['category_id'];
          ?>
          <tr>
            <th><?php echo $count++ ?></th>
            <th><?php echo $res['category_name']; ?></th>
            <th>
              <a href="CategoryUpdate.php?category_id=<?php echo $category_id ?>">Sửa</a>
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