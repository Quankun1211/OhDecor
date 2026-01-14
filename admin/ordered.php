<?php
  include 'headerAdmin.php';
?>
<?php
  include "../class/userClass.php";
?>
<?php
  $user = new User();
  $get_ordered = $user->get_ordered();
?>
<div class="container">
  <?php
    include "../component/leftSideAdmin.php";
  ?>
  <div class="right-side">
    <div class="col">
      <table>
        <tr>
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Tên khách hàng</th>
          <th>Email</th>
          <th></th>
        </tr>
        <?php
          if($get_ordered) {
            while($res = $get_ordered->fetch_assoc()) {
        ?>
        <tr>
          <td><?php echo $res['product_id'];?></td>
          <td><?php echo $res['product_name'];?></td>
          <td><?php echo $res['name'];?></td>
          <td><?php echo $res['email'];?></td>
          <td style="text-align: center;">
            <a class="order-link" href="orderedDetail.php?order_id=<?php echo $res['order_id']; ?>&user_id=<?php echo $res['user_id']; ?>">Chi tiết</a>
            <a class="order-link" href="orderedDelete.php?order_id=<?php echo $res['order_id']; ?>">Xóa</a>
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