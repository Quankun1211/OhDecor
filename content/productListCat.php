<?php include "../component/header.php" ?>
<head>
  <link rel="stylesheet" href="../css/style1.css">
</head>
<?php
  include "../class/productClass.php";
  $product = new Product();
  $category_id = $_GET['category_id'];
  $get_category = $product->show_category_id($category_id);
  $res_cat = $get_category->fetch_assoc();
?>
    <div class="product">
        <div class="content">
            <ul class="toolbar">
              <li>
                <a href="main.php">Trang chủ</a>
              </li>
              <li>
                <a>></a>
              </li>
              <li>
                <a href="productListCat.php?category_id=<?php echo $res_cat['category_id'] ?>"><?php echo $res_cat['category_name'] ?></a>
              </li>
            </ul>
            <div class="intro-pr">
              <b><?php echo $res_cat['category_name'] ?></b>
              <img class="logo1" src="../img/slider_text_image.webp">
            </div>
            <div class="category">
              <div class="cts1">
                <div class="grid_cts1">
                  <nav class="category-p1">
                    <h3 class="category_heading">Danh mục sản phẩm</h3>
                    <ul class="category-list">
                      <?php
                        $show_category = $product->show_category();
                        if($show_category) {
                          while($res = $show_category->fetch_assoc()) {
                            
                      ?>
                      <li class="category-item">
                        <a href="productListCat.php?category_id=<?php echo $res['category_id']; ?>" class="category_link"><?php echo $res['category_name'] ?></a>
                      </li>
                      
                      <?php
                          }
                        }
                      ?>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="cts2">
                <div class="grid_cts2">
                  <?php
                    $get_product_category_id = $product->get_product_category_id($category_id);
                    if($get_product_category_id) {
                      while($res_prod = $get_product_category_id->fetch_assoc()) {
                  ?>
                      <div class="grid_item2">
                        <a href="productDetail.php?product_id=<?php echo $res_prod['product_id']; ?>">
                          <div class="product_img" style="background-image: url(../admin/uploads/<?php echo $res_prod['product_image'] ?>);"></div>
                          <h5 class="product_name"><?php echo $res_prod['product_name'] ?></h5>
                        </a>
                        <div class="product_price">
                          <span class="product_price_present"><?php echo $res_prod['product_price'] ?>đ</span>
                        </div>
                        <div class="product_click">
                          <button class="collection-item-btn product_buy"><a href="cart.php?product_id=<?php echo $res_prod['product_id'] ?>">Mua ngay</a></button>
                        </div>
                      </div>
                  <?php
                      }
                    }
                  ?>
                  
                </div>
              </div>
            </div>
        </div>
        <?php
          include "../component/footer.php";
        ?>
    </div>
<!-- </body>
</html> -->

<script src="../js/index.js"></script>