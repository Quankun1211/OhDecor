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
                <p class="delete-btn">Xóa</p>
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
    <div class="drop-down">
      <div class="drop-down-container">
        <h1>Xác nhận xóa vĩnh viễn ?</h1>
        <div class="drop-down-container-btn">
          <button class="drop-down-btn-cancel">Hủy</button>
          <div class="drop-down-btn-delete">
            <a href="BrandDelete.php?brand_id=<?php echo $brand_id_public; ?>">Xác nhận</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script>
    const deleteBtn = document.querySelector(".delete-btn")
    const dropDown = document.querySelector(".drop-down")
    const cancel = document.querySelector(".drop-down-btn-cancel")
    deleteBtn.onclick = () => {
      dropDown.classList.add("active")
    }
    cancel.onclick = () => {
      dropDown.classList.remove("active")
    }
  </script>
</body>
</html>