<?php
  include '../configDb/database.php';
  class Product {
    private $db;
    public function __construct() {
      $this->db = new Database();
    }
    public function show_category() {
      $query = "SELECT * FROM tbl_category ORDER BY category_id";
      $res = $this->db->select($query);
      return $res;
    }
    public function show_brand() {
      $query = "SELECT * FROM tbl_brand ORDER BY category_id";
      $res = $this->db->select($query);
      return $res;
    }
    public function show_brand_ajax($category_id) {
      $query = "SELECT * FROM tbl_brand WHERE category_id = '$category_id'";
      $res = $this->db->select($query);
      return $res;
    }
    public function insert_product($category_id, $brand_id, $product_name, $product_code, $product_price, $product_size, $product_type, $product_material, $product_color, $product_quantity) {
      $query = "INSERT INTO tbl_product (category_id, brand_id, product_name, product_code, product_price, product_size, product_type, product_material, product_color, product_quantity) VALUES ($category_id, $brand_id, $product_name, $product_code, $product_price, $product_size, $product_type, $product_material, $product_color, $product_quantity)";
      $res = $this->db->insert($query);
      return $res;
    }
  }
?>