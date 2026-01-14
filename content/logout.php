<?php
  session_start();
  ob_start();
  if(isset($_SESSION['role'])) {
    unset($_SESSION['role']);
    session_destroy();
  } else if (isset($_SESSION['user_name'])) {
    unset($_SESSION['role']);
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    unset($_SESSION['first_name']);
    unset($_SESSION['last_name']);
    unset($_SESSION['email']);
    session_destroy();
  }
  header("Location:login.php ");
?>