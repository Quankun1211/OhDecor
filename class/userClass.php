<?php
 include "../configDb/database.php";

 class User {
  private $db;
  public function __construct() {
    $this->db = new Database();
  }

  public function findUser($username) {
    $query = "SELECT * FROM users WHERE user_name = '$username'";
    $res = $this->db->select($query);
    return $res;
  }

  public function register($first_name, $last_name, $email, $phone, $user_name, $password) {
    $query = "INSERT INTO users (first_name, last_name, email, phone, user_name, password) VALUES ('$first_name','$last_name','$email','$phone','$user_name','$password')";
    $res = $this->db->insert($query);
    return $res;
  }

  public function get_user($username, $password) {
    $query = "SELECT * FROM users WHERE user_name = '$username' AND password = '$password'";
    $res = $this->db->select($query);
    return $res;
  }
 }
?>