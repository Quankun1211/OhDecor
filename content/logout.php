<?php
  session_start();
  ob_start();
  if(isset($_SESSION['role'])) {
    unset($_SESSION['role']);
  } else if (isset($_SESSION['user_name'])) {
    unset($_SESSION['user_name']);
  }
  header("Location:login.php ");
?>