<?php
  include "../class/userClass.php";
  $user = new User();
  $order_id = $_GET['order_id'];
  $delete_order = $user->delete_order($order_id);
  header("Location:ordered.php?act=adOrdered")
?>