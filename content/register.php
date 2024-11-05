<?php
  include '../class/userClass.php';
?>
<?php
  $user = new User();
  $checkUser = false;
  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $find_user = $user->findUser($user_name);
    if($find_user) {
      $checkUser = true;
    } else {
      $register = $user->register($first_name ,$last_name ,$email ,$phone ,$user_name ,$password);
      header("Location:login.php");
    }
  }
?>

<?php
  include "../component/header.php";
?>
<div class="app">
  <div class="login">
    <div class="container">
      
      <form action="" class="form-login" method="post">
        <h1>Đăng ký</h1>
        <p>Đã có tài khoản, đăng nhập <a href="login.php">tại đây</a></p>
        <input type="text" name="first_name" placeholder="Họ">
        <input type="text" name="last_name" placeholder="Tên">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="phone" placeholder="Số điện thoại">
        <input type="text" name="user_name" placeholder="Tên đăng nhập">
        <input type="text" name="password" placeholder="Mật khẩu">
        <p class="user_active <?php echo $checkUser ? "active" : ""; ?>">Người dùng đã tồn tại ! Vui lòng chọn tên đăng nhập khác</p>
        <button>Đăng ký</button>
      </form>
    </div>
  </div>
</div>
<?php
  include "../component/footer.php";
?>