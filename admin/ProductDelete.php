<?php
  include '../class/productClass.php';
?>
<?php
  $product = new Product();
  $product_id = $_GET['product_id'];
  $delete_prod = $product->delete_product($product_id);
  header("Location:adminProd.php")
?>