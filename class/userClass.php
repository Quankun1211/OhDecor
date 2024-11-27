<?php
 require_once '../configDb/database.php';

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
  public function insert_user_payment($product_id, $product_name, $product_price, $user_id, $user_name, $name, $phone, $address, $note, $email, $payment) {
    $query = "INSERT INTO ordered (product_id, product_name, product_price, user_id ,user_name ,name ,phone ,address ,note ,email, total_payment) VALUES ('$product_id', '$product_name', '$product_price', '$user_id', '$user_name', '$name', '$phone', '$address', '$note', '$email', '$payment')";
    $res = $this->db->insert($query);
    return $res;
  }
  public function get_ordered() {
    $query = "SELECT * FROM ordered";
    $res = $this->db->select($query);
    return $res;
  }
  public function get_product($product_id) {
    $query = "SELECT * FROM tbl_product WHERE product_id = '$product_id'";
    $res = $this->db->select($query);
    return $res;
  }
  public function get_sum($user_id) {
    $query = "SELECT count(user_id) as tong from ordered where user_id = '$user_id'";
    $res = $this->db->select($query);
    return $res;
  }
  public function get_order_one($order_id) {
    $query = "SELECT * FROM ordered where order_id = '$order_id'";
    $res = $this->db->select($query);
    return $res;
  }
  public function delete_order($order_id) {
    $query = "DELETE FROM ordered where order_id = '$order_id'";
    $res = $this->db->delete($query);
    return $res;
  }
  public function update_quantity($new_quantity) {
    $query = "UPDATE tbl_product SET product_quantity = '$new_quantity'";
    $res = $this->db->update($query);
    return $res;
  }
 }
?>