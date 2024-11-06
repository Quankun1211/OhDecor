<?php
  include "../class/userClass.php";
?>
<?php
  $user = new User();
  error_reporting(0);
  if(!isset($_SESSION)) { 
    session_start(); 
  } 
  ob_start();
  $txt_err = false;
  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $get_user = $user->get_user($user_name, $password);
    if($get_user) {
      $res = $get_user->fetch_assoc();
      $role = $res['role'];
      $_SESSION['role'] = $role;
      if($role == 1) {
        header("Location: ../admin/index.php");
      } else {
        $_SESSION['user_id'] = $res['user_id'];
        $_SESSION['user_name'] = $user_name;
        $_SESSION['first_name'] = $res['first_name'];
        $_SESSION['last_name'] = $res['last_name'];
        $_SESSION['email'] = $res['email'];
        header("Location: main.php");
      }
    } else {
      $txt_err = true;
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
        <h1>Đăng nhập</h1>
        <p>Chưa có tài khoản, đăng ký <a href="register.php">tại đây</a></p>
        <input type="text" name="user_name" placeholder="Tên đăng nhập">
        <input type="text" name="password" placeholder="Mật khẩu">
        <p class="user_active <?php echo $txt_err ? "active" : ""; ?>">Tên đăng nhập hoặc mật khẩu sai !! Vui lòng nhập lại</p>
        <button>Đăng nhập</button>
      </form>
    </div>
  </div>
</div>
<?php
  include "../component/footer.php";
?>