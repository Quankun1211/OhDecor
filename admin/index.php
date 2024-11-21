<?php
  include '../class/categoryClass.php';
?>
<?php
  $category = new Category();
  $category_id_public;
?>

<?php
  session_start();
  ob_start();
  if(isset($_SESSION['role']) && ($_SESSION['role'] == 1)) {
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
    const deleteBtn = document.querySelectorAll(".delete-btn")
    const dropDown = document.querySelector(".drop-down")
    const cancel = document.querySelector(".drop-down-btn-cancel")
    deleteBtn.forEach(item => {
        item.onclick = () => {
        dropDown.classList.add("active")
      }
    })
    cancel.onclick = () => {
      dropDown.classList.remove("active")
    }
  </script>
  
</body>
</html>
<?php
  } else {
    header("Location:../content/login.php");
  }
?>