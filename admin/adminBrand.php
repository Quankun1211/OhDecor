<?php
  include '../class/brandClass.php';
?>
<?php
  $brand = new Brand();
  $brand_id_public;
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
        <table>
          <tr>
            <th>STT</th>
            <th>Danh mục</th>
            <th>Nhãn sản phẩm</th>
            <th>Lựa chọn</th>
          </tr>
          <?php 
            $show_brand = $brand->show_brand();
            if($show_brand) {
              $count = 1;
              while($res = $show_brand->fetch_array()) {
                $category_id = $res['category_id'];
                $brand_id_public = $res['brand_id'];
          ?>
          <tr>
            <td><?php echo $count++; ?></td>
            <td>
              <?php 
                $show_category = $brand->show_category_id($category_id);
                $res_category = $show_category->fetch_assoc();
                echo $res_category['category_name'];
              ?>
            </td>
            <td><?php echo $res['brand_name']; ?></td>
            <th width="20%">
              <div class="wrap-delete">
                <a href="BrandUpdate.php?brand_id=<?php echo $res['brand_id'] ?>">Sửa</a>
                <a href="BrandUpdate.php?brand_id=<?php echo $res['brand_id'] ?>">Xóa</a>
              </div>
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