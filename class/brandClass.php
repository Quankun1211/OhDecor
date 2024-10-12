<?php
  include '../configDb/database.php';
  class Brand {
    private $db;
    public function __construct() {
      $this->db = new Database();
    }
    public function insert_brand($brand_name, $category_id) {
      $query = "INSERT INTO tbl_brand (brand_name, category_id) VALUES ('$brand_name' ,'$category_id')";
      $res = $this->db->insert($query);
      return $res;
    }
    public function show_category() {
      $query = "SELECT * FROM tbl_category ORDER BY category_id";
      $res = $this->db->select($query);
      return $res;
    }
    public function show_brand() {
      $query = "SELECT * FROM tbl_brand";
      $res = $this->db->select($query);
      return $res;
    }
    public function show_category_id($category_id) {
      $query = "SELECT * FROM tbl_category WHERE category_id = '$category_id'";
      $res = $this->db->select($query);
      return $res;
    }
  }
?>