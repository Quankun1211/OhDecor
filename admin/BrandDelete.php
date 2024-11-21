<?php
  include '../class/brandClass.php';
?>
<?php
  $brand = new Brand();
  $brand_id = $_GET['brand_id'];
  $delete_brand = $brand->delete_brand($brand_id);
  $delete_prod = $brand->delete_prod($brand_id);
  header("Location:adminBrand.php")
?>