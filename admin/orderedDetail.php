<?php
  $order_id = $_GET['order_id'];
  $user_id = $_GET['user_id'];
?>
<?php
  include "../class/userClass.php";
  $user = new User();
  $detail_ordered = $user->get_order_one($order_id);
  $res_detail = $detail_ordered->fetch_assoc();
  $sum = $user->get_sum($user_id);
  $res = $sum->fetch_assoc();
?>
<?php
  include 'headerAdmin.php';
?>

<div class="container">
  <div class="right-side">
    <div class="col">
      <table>
        <tr>
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Tên tài khoản</th>
          <th>Tên khách hàng</th>
          <th>Số điện thoại</th>
          <th>Địa chỉ</th>
          <th>Email</th>
          <th>Tổng thành tiền</th>
          <th>Ghi chú</th>
          <th>Số lần đã đặt hàng</th>
        </tr>
        <tr>
          <th><?php echo $res_detail['product_id']; ?></th>
          <th><?php echo $res_detail['product_id']; ?></th>
          <th><?php echo $res_detail['user_name']; ?></th>
          <th><?php echo $res_detail['name']; ?></th>
          <th><?php echo $res_detail['phone']; ?></th>
          <th><?php echo $res_detail['address']; ?></th>
          <th><?php echo $res_detail['email']; ?></th>
          <th><?php echo $res_detail['total_payment']; ?></th>
          <th width="20%"><?php echo $res_detail['note']; ?></th>
          <th><?php echo $res['tong'] ?></th>
        </tr>
      </table>
    </div>
  </div>
</div>