<?php
  include "../class/productClass.php";
  $product = new Product();
  $get_distinct_brand = $product->get_distinct_brand();
  $brandIds = [];
  while($res_distinct = $get_distinct_brand->fetch_assoc()) {
    array_push($brandIds, $res_distinct['brand_id']);
  }
?>
<?php
  include "../component/header.php";
?>
<div class="content">

      <div class="intro">
        <div class="container">
          <div class="intro-text">
            <h1><span>Nội thất</span> nâng tầm không gian sống</h1>
            <p>Khám phá nội thất thiết kế đương đại mang đến cảm giác thoải mái, sang trọng. Cá nhân hoá trong từng sản phẩm phù hợp với mọi không gian sống.</p>
            <button class="intro-text-btn"><a href="productList.php">Mua sắm ngay</a></button>
          </div>
          <div class="intro-img">
            <img src="../img/slider_text_image.webp" alt="" class="intro-img-main">
          </div>
        </div>
      </div>
      <div class="prod-preview">
        <div class="container">
          <div class="prod-preview-title">
            <p>Các dòng sản phẩm nổi bật</p>
            <div class="prod-preview-title-btn">
              <i class="prod-btn fa-solid fa-chevron-left"></i>
              <i class="prod-btn fa-solid fa-chevron-right"></i>
            </div>
          </div>
          <div class="list-prod">
            <div class="prod-item">
              <div class="prod-item-left">
                <h1>sofa</h1>
                <p>Ghế sofa vải và ghế dài</p>
                <a href="productListBrand.php?brand_id=31">Xem thêm <i class="fa-solid fa-arrow-right"></i></a>
              </div>
              <div class="prod-item-right">
                <img src="../img/cate_1.webp" alt="">
              </div>
            </div>
            <div class="prod-item">
              <div class="prod-item-left">
                <h1>Đèn</h1>
                <p>Đèn trang trí nội thất</p>
                <a href="productListBrand.php?brand_id=31">Xem thêm <i class="fa-solid fa-arrow-right"></i></a>
              </div>
              <div class="prod-item-right">
                <img src="../img/cate_2.webp" alt="">
              </div>
            </div>
            <div class="prod-item">
              <div class="prod-item-left">
                <h1>giường</h1>
                <p>Giường đa phong cách</p>
                <a href="productListBrand.php?brand_id=31">Xem thêm <i class="fa-solid fa-arrow-right"></i></a>
              </div>
              <div class="prod-item-right">
                <img src="../img/cate_3.webp" alt="">
              </div>
            </div>
            <div class="prod-item">
              <div class="prod-item-left">
                <h1>cây</h1>
                <p>Cây xanh trang trí</p>
                <a href="productListBrand.php?brand_id=31">Xem thêm <i class="fa-solid fa-arrow-right"></i></a>
              </div>
              <div class="prod-item-right">
                <img src="../img/cate_7.webp" alt="">
              </div>
            </div>
            <div class="prod-item">
              <div class="prod-item-left">
                <h1>sofa</h1>
                <p>Ghế sofa vải và ghế dài</p>
                <a href="productListBrand.php?brand_id=31">Xem thêm <i class="fa-solid fa-arrow-right"></i></a>
              </div>
              <div class="prod-item-right">
                <img src="../img/cate_1.webp" alt="">
              </div>
            </div>
            <div class="prod-item">
              <div class="prod-item-left">
                <h1>sofa</h1>
                <p>Ghế sofa vải và ghế dài</p>
                <a href="productListBrand.php?brand_id=31">Xem thêm <i class="fa-solid fa-arrow-right"></i></a>
              </div>
              <div class="prod-item-right">
                <img src="../img/cate_1.webp" alt="">
              </div>
            </div>
            <div class="prod-item">
              <div class="prod-item-left">
                <h1>sofa</h1>
                <p>Ghế sofa vải và ghế dài</p>
                <a href="productListBrand.php?brand_id=31">Xem thêm <i class="fa-solid fa-arrow-right"></i></a>
              </div>
              <div class="prod-item-right">
                <img src="../img/cate_1.webp" alt="">
              </div>
            </div>
            <div class="prod-item">
              <div class="prod-item-left">
                <h1>sofa</h1>
                <p>Ghế sofa vải và ghế dài</p>
                <a href="productListBrand.php?brand_id=31">Xem thêm <i class="fa-solid fa-arrow-right"></i></a>
              </div>
              <div class="prod-item-right">
                <img src="../img/cate_1.webp" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="collection">
        <div class="container">
          <div class="collection-title">Bộ sưu tập</div>
          <ul class="collection-bar">
            <?php
              $show_category = $product->show_category();
              if($show_category) {
                while($res = $show_category->fetch_assoc()) {
            ?>
            <li><a href="productListCat.php?category_id=<?php echo $res['category_id'] ?>"><?php echo $res['category_name'] ?></a></li>
            <?php
                }
              }
            ?>
          </ul>
          <div class="collection-list">
            <?php
              $get_limit_4 = $product->get_limit_4();
              if($get_limit_4) {
                while($res = $get_limit_4->fetch_assoc()) {
            ?>
              <div class="col">
                <div class="collection-item">
                  <a href="productDetail.php?product_id=<?php echo $res['product_id']; ?>">
                    <div class="collection-item-img">
                      <img src="../admin/uploads/<?php echo $res['product_image'] ?>" alt="">
                    </div>
                    <div class="collection-item-name"><?php echo $res['product_name'] ?></div>
                    <div class="collection-item-price"><?php echo $res['product_price'] ?><span style="text-decoration: underline;">đ</span></div>
                  </a>
                  <button class="collection-item-btn"><a href="cart.php?product_id=<?php echo $res['product_id'] ?>">Mua ngay</a></button>
                </div>
              </div>
            <?php
                }
              }
            ?>
          </div>
        </div>
      </div>
      <div class="description">
        <div class="container">
          <div class="description-content">
            <h1>NGUỒN CẢM HỨNG VÔ TẬN</h1>
            <p>Khám phá nội thất thiết kế đương đại mang đến cảm giác thoải mái, sang trọng. Cá nhân hoá trong từng sản phẩm phù hợp với mọi không gian sống.</p>
            <div class="overlay"></div>
          </div>
        </div>
      </div>
      <div class="production">
        <div class="container">
          <div class="production-row">
            <div class="production-row-detail">
              <?php
                $randomBrand = $brandIds[array_rand($brandIds)];
                $select_limit_2 = $product->get_limit_2($randomBrand);
                if($select_limit_2) {
                  while($res_limit = $select_limit_2->fetch_assoc()) {
              ?>
                <div class="col">
                  <div class="collection-item">
                    <a href="">
                      <div class="collection-item-img">
                        <img src="../img/collec1.webp" alt="">
                      </div>
                      <div class="collection-item-name">Đèn người ôm bóng đèn</div>
                    </a>
                    <div class="collection-item-price">15.000.000 <span style="text-decoration: underline;">đ</span></div>
                    <button class="collection-item-btn">Thêm vào giỏ</button>
                  </div>
                </div>
              <?php
                  }
                }
              ?>
            </div>
            <div class="production-row-img">
              <img src="../img/product_1_bg.webp" alt="">
              <div class="overlay"></div>
              <p class="production-row-img-title">Nội thất phòng khách</p>
            </div>
          </div>
          <div class="production-row">
            <div class="production-row-img">
              <img src="../img/product_1_bg.webp" alt="">
              <div class="overlay"></div>
              <p class="production-row-img-title">Nội thất phòng khách</p>
            </div>
            <div class="production-row-detail">
            <?php
                $randomBrand = $brandIds[array_rand($brandIds)];
                $select_limit_2 = $product->get_limit_2($randomBrand);
                if($select_limit_2) {
                  while($res_limit = $select_limit_2->fetch_assoc()) {
              ?>
                <div class="col">
                  <div class="collection-item">
                    <a href="productDetail.php?product_id=<?php echo $res_limit['product_id'] ?>">
                      <div class="collection-item-img">
                        <img src="../admin/uploads/<?php echo $res_limit['product_image'] ?>" alt="">
                      </div>
                      <div class="collection-item-name"><?php echo $res_limit['product_name'] ?></div>
                    </a>
                    <div class="collection-item-price"><?php echo $res_limit['product_price'] ?> <span style="text-decoration: underline;">đ</span></div>
                    <button class="collection-item-btn"><a href="cart.php?product_id=<?php echo $res_limit['product_id'] ?>">Mua ngay</a></button>
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
      <div class="before-footer">
        <div class="container">
          <img src="../img/decor_image.webp" alt="">
        </div>
      </div>
    </div>
<?php
  include "../component/footer.php";
?>
  <script src="../js/index.js"></script>
