<?php
  include '../class/categoryClass.php';
?>
<?php
  $category = new Category();
  $category_id_public;
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
              $category_id_public = $res['category_id'];
          ?>
          <tr>
            <th><?php echo $count++ ?></th>
            <th><?php echo $res['category_name']; ?></th>
            <th width="20%">
              <div class="wrap-delete">
                <a href="CategoryUpdate.php?category_id=<?php echo $category_id ?>">Sửa</a>
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
            <a href="CategoryDelete.php?category_id=<?php echo $category_id_public ?>">Xác nhận</a>
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