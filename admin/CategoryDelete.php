<?php
  include '../class/categoryClass.php';
?>
<?php
  $category = new Category();
  $category_id = $_GET['category_id'];
  $delete_category = $category->delete_category($category_id);
  $delete_brand = $category->delete_brand($category_id);
  $delete_prod = $category->delete_prod($category_id);
  header("Location:adminCat.php")
?>