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
    public function get_brand($brand_id) {
      $query = "SELECT * FROM tbl_brand WHERE brand_id = '$brand_id'";
      $res = $this->db->select($query);
      return $res;
    }
    public function get_category_ajax($category_id) {
      $query = "SELECT * FROM tbl_category WHERE category_id not like '$category_id'";
      $res = $this->db->select($query);
      return $res;
    }
    public function update_brand($brand_id, $category_id, $brand_name) {
      $query = "
        UPDATE tbl_brand
        SET category_id = '$category_id', brand_name = '$brand_name'
        WHERE brand_id = '$brand_id'
      ";
      $res = $this->db->update($query);
      return $res;
    }
    public function delete_brand($brand_id) {
      $query = "DELETE FROM tbl_brand WHERE brand_id = '$brand_id'";
      $res = $this->db->delete($query);
      return $res;
    }
    public function delete_prod($brand_id) {
      $query = "DELETE FROM tbl_product WHERE brand_id = '$brand_id'";
      $res = $this->db->delete($query);
      return $res;
    }
  }
?>