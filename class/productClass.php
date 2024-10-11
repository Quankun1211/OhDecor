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
      $query = "INSERT INTO tbl_product (category_id, brand_id, product_name, product_code, product_price, product_size, product_type, product_material, product_color, product_quantity) VALUES ('$category_id', '$brand_id', '$product_name', '$product_code', '$product_price', '$product_size', '$product_type', '$product_material', '$product_color', '$product_quantity')";
      $res = $this->db->insert($query);
      return $res;
    }
    public function show_product() {
      $query = "SELECT * FROM tbl_product";
      $res = $this->db->select($query);
      return $res;
    }
    public function show_category_id($category_id) {
      $query = "SELECT * FROM tbl_category WHERE category_id = '$category_id'";
      $res = $this->db->select($query);
      return $res;
    }
    public function show_brand_id($brand_id) {
      $query = "SELECT * FROM tbl_brand WHERE brand_id = '$brand_id'";
      $res = $this->db->select($query);
      return $res;
    }
    public function get_product($product_id) {
      $query = "SELECT * FROM tbl_product WHERE product_id = '$product_id'";
      $res = $this->db->select($query);
      return $res;
    }
    public function get_category_ajax($category_id) {
      $query = "SELECT * FROM tbl_category WHERE category_id not like '$category_id'";
      $res = $this->db->select($query);
      return $res;
    }



    public function update_product($product_id, $category_id, $brand_id, $product_name, $product_code, $product_price, $product_size, $product_type, $product_material, $product_color, $product_quantity) {
      $query = "
        UPDATE tbl_product
        SET category_id = '$category_id', brand_id = '$brand_id', product_name = '$product_name', product_code = '$product_code', product_price = '$product_price', product_size = '$product_size', product_type = '$product_type', product_material = '$product_material', product_color = '$product_color', product_quantity = '$product_quantity'
        WHERE product_id = '$product_id'
        ";
      $res = $this->db->update($query);
      return $res;
    }
  }
?>