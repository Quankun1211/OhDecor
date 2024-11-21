
<?php
  include '../class/productClass.php';
  $product = new Product();

  $category_id = $_GET['category_id'];
?>
<?php 
  $show_brand_ajax = $product->show_brand_ajax($category_id);
  if($show_brand_ajax) {
    while($res = $show_brand_ajax->fetch_assoc()) {
      ?>
      <option value="<?php echo $res['brand_id'] ?>"><?php echo $res['brand_name']?></option>
    <?php
    }
  }
  ?>