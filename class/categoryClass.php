<?php
  include '../configDb/database.php';
  class Category {
    private $db;
    public function __construct() {
      $this->db = new Database();
    }
    public function insert_category($category_name) {
      $query = "INSERT INTO tbl_category (category_name) VALUES ('$category_name')";
      $res = $this->db->insert($query);
      return $res;
    }
  }
?>