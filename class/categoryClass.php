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
    public function show_category() {
      $query = "SELECT * FROM tbl_category order by category_id";
      $res = $this->db->insert($query);
      return $res;
    }
    public function get_category($category_id) {
      $query = "SELECT * FROM tbl_category WHERE category_id = '$category_id'";
      $res = $this->db->select($query);
      return $res;
    }
    public function update_category($category_id, $category_name) {
      $query = "
        UPDATE tbl_category
        SET category_name = '$category_name'
        WHERE category_id = '$category_id'
      ";
      $res = $this->db->update($query);
      return $res;
    }
    public function delete_category($category_id) {
      $query = "DELETE FROM tbl_category WHERE category_id = '$category_id'";
      $res = $this->db->delete($query);
      return $res;
    }
    public function delete_brand($category_id) {
      $query = "DELETE FROM tbl_brand WHERE category_id = '$category_id'";
      $res = $this->db->delete($query);
      return $res;
    }
    public function delete_prod($category_id) {
      $query = "DELETE FROM tbl_product WHERE category_id = '$category_id'";
      $res = $this->db->delete($query);
      return $res;
    }
  }
?>