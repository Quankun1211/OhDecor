<?php
  if(session_status() == PHP_SESSION_ACTIVE) {
    session_start();
  }
  ob_start();
  ?>
<?php
  include "../component/header.php";
  $product_id = $_GET['product_id'];
?>
<?php
  include "../class/userClass.php";
  $user = new User();
  $product = $user->get_product($product_id);
  $res = $product->fetch_assoc();
  $checkUserLogin = "";
  if(isset($_SESSION['user_name'])) {
    $checkUserLogin = "none";
    echo $_SESSION['user_name'];
  }
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!isset($_SESSION['user_name'])) {
      header("location:login.php");
    } else {
      $product_name = $res['product_name'];
      $product_price = $res['product_price'];
      $user_id = $_SESSION['user_id'];
      $user_name = $_SESSION['user_name'];
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $note = $_POST['note'];
      $email = $_SESSION['email'];
      $insert_user_payment = $user->insert_user_payment($product_id, $product_name,$product_price, $user_id, $user_name, $name, $phone, $address, $note, $email);
      header("location: main.php");
    }
  }
  
?>
<div class="cart">
  <form method="post" action="" class="container">
    <div class="left-side">
      <div class="content_cart-left">
        <h1>OH! DECOR</h1>
        <div class="wrap_info">
          <p>Thông tin mua hàng</p>
          <a href="" class="login_cart <?php echo $checkUserLogin ?>">Đăng nhập</a>
        </div>
        <input type="text" placeholder="Email" name="email">
        <input type="text" placeholder="Họ và tên" name="name">
        <input type="text" placeholder="Số điện thoại" name="phone">
        <input type="text" placeholder="Địa chỉ" name="address">
        <textarea name="note" id="" placeholder="Ghi chú (tùy chọn)"></textarea>
      </div>
    </div>
    <div class="mid-side">
      <div class="content_cart-mid">
        <h1>Vận chuyển</h1>
        <div class="require">Vui lòng nhập thông tin giao hàng</div>
        <p class="payment">Thanh toán</p>
        <div class="wrap-checkbox">
          <input type="checkbox" id="check1">
          <label for="check1">	Chuyển khoản</label>
        </div>
        <div class="wrap-checkbox">
          <input type="checkbox" id="check2">
          <label for="check2">Thu hộ (COD)</label>
        </div>
      </div>
    </div>
    <div class="right-side">
      <div class="content_cart-right">
        <h1>Đơn hàng (1 sản phẩm)</h1>
        <div class="wrap-prod-info">
          <img src="../img/slider_text_image.webp" alt="">
          <p class="wrap-prod-info-name"><?php echo $res['product_name'] ?></p>
          <p><?php echo $res['product_price']; ?>₫</p>
        </div>
        <div class="wrap-ship">
          <div class="wrap-ship-r1">
            <p>Tạm tính</p>
            <p class="wrap-ship-r1-price"><?php echo $res['product_price']; ?>₫</p>
          </div>
          <div class="wrap-ship-payship">Phí vận chuyển</div>
        </div>
        <div class="total">
          <div class="total-r1">
            <p>Tổng cộng</p>
            <p class="total-r1-price"><?php echo $res['product_price']; ?>₫</p>
          </div>
          <div class="total-r2">
            <a href="">Quay về giỏ hàng</a>
            <button class="cart-btn">Đặt hàng</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>