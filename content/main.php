<?php
  include "../class/productClass.php";
  $product = new Product();
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
            <button class="intro-text-btn">Mua sắm ngay</button>
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
                <span>Xem thêm <i class="fa-solid fa-arrow-right"></i></span>
              </div>
              <div class="prod-item-right">
                <img src="../img/cate_1.webp" alt="">
              </div>
            </div>
            <div class="prod-item">
              <div class="prod-item-left">
                <h1>sofa</h1>
                <p>Ghế sofa vải và ghế dài</p>
                <span>Xem thêm <i class="fa-solid fa-arrow-right"></i></span>
              </div>
              <div class="prod-item-right">
                <img src="../img/cate_1.webp" alt="">
              </div>
            </div>
            <div class="prod-item">
              <div class="prod-item-left">
                <h1>sofa</h1>
                <p>Ghế sofa vải và ghế dài</p>
                <span>Xem thêm <i class="fa-solid fa-arrow-right"></i></span>
              </div>
              <div class="prod-item-right">
                <img src="../img/cate_1.webp" alt="">
              </div>
            </div>
            <div class="prod-item">
              <div class="prod-item-left">
                <h1>sofa</h1>
                <p>Ghế sofa vải và ghế dài</p>
                <span>Xem thêm <i class="fa-solid fa-arrow-right"></i></span>
              </div>
              <div class="prod-item-right">
                <img src="../img/cate_1.webp" alt="">
              </div>
            </div>
            <div class="prod-item">
              <div class="prod-item-left">
                <h1>sofa</h1>
                <p>Ghế sofa vải và ghế dài</p>
                <span>Xem thêm <i class="fa-solid fa-arrow-right"></i></span>
              </div>
              <div class="prod-item-right">
                <img src="../img/cate_1.webp" alt="">
              </div>
            </div>
            <div class="prod-item">
              <div class="prod-item-left">
                <h1>sofa</h1>
                <p>Ghế sofa vải và ghế dài</p>
                <span>Xem thêm <i class="fa-solid fa-arrow-right"></i></span>
              </div>
              <div class="prod-item-right">
                <img src="../img/cate_1.webp" alt="">
              </div>
            </div>
            <div class="prod-item">
              <div class="prod-item-left">
                <h1>sofa</h1>
                <p>Ghế sofa vải và ghế dài</p>
                <span>Xem thêm <i class="fa-solid fa-arrow-right"></i></span>
              </div>
              <div class="prod-item-right">
                <img src="../img/cate_1.webp" alt="">
              </div>
            </div>
            <div class="prod-item">
              <div class="prod-item-left">
                <h1>sofa</h1>
                <p>Ghế sofa vải và ghế dài</p>
                <span>Xem thêm <i class="fa-solid fa-arrow-right"></i></span>
              </div>
              <div class="prod-item-right">
                <img src="../img/cate_1.webp" alt="">
              </div>
            </div>
            <div class="prod-item">
              <div class="prod-item-left">
                <h1>sofa</h1>
                <p>Ghế sofa vải và ghế dài</p>
                <span>Xem thêm <i class="fa-solid fa-arrow-right"></i></span>
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
            <li><?php echo $res['category_name'] ?></li>
            <?php
                }
              }
            ?>
          </ul>
          <div class="collection-list">
            <?php
              $show_product = $product->show_product();
              if($show_product) {
                while($res = $show_product->fetch_assoc()) {
            ?>
              <div class="col">
                <div class="collection-item">
                  <div class="collection-item-img">
                    <img src="../admin/uploads/<?php echo $res['product_image'] ?>" alt="">
                  </div>
                  <div class="collection-item-name"><?php echo $res['product_name'] ?></div>
                  <div class="collection-item-price"><?php echo $res['product_price'] ?><span style="text-decoration: underline;">đ</span></div>
                  <button class="collection-item-btn">Thêm vào giỏ</button>
                </div>
              </div>
            <?php
                }
              }
            ?>
            
            <!-- <div class="col">
              <div class="collection-item">
                <div class="collection-item-img">
                  <img src="../img/collec1.webp" alt="">
                </div>
                <div class="collection-item-name">Đèn người ôm bóng đèn</div>
                <div class="collection-item-price">15.000.000 <span style="text-decoration: underline;">đ</span></div>
                <button class="collection-item-btn">Thêm vào giỏ</button>
              </div>
            </div>
            <div class="col">
              <div class="collection-item">
                <div class="collection-item-img">
                  <img src="../img/collec1.webp" alt="">
                </div>
                <div class="collection-item-name">Đèn người ôm bóng đèn</div>
                <div class="collection-item-price">15.000.000 <span style="text-decoration: underline;">đ</span></div>
                <button class="collection-item-btn">Thêm vào giỏ</button>
              </div>
            </div>
            <div class="col">
              <div class="collection-item">
                <div class="collection-item-img">
                  <img src="../img/collec1.webp" alt="">
                </div>
                <div class="collection-item-name">Đèn người ôm bóng đèn</div>
                <div class="collection-item-price">15.000.000 <span style="text-decoration: underline;">đ</span></div>
                <button class="collection-item-btn">Thêm vào giỏ</button>
              </div>
            </div> -->
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
              <div class="col">
                <div class="collection-item">
                  <div class="collection-item-img">
                    <img src="../img/collec1.webp" alt="">
                  </div>
                  <div class="collection-item-name">Đèn người ôm bóng đèn</div>
                  <div class="collection-item-price">15.000.000 <span style="text-decoration: underline;">đ</span></div>
                  <button class="collection-item-btn">Thêm vào giỏ</button>
                </div>
              </div>
              <div class="col">
                <div class="collection-item">
                  <div class="collection-item-img">
                    <img src="../img/collec1.webp" alt="">
                  </div>
                  <div class="collection-item-name">Đèn người ôm bóng đèn</div>
                  <div class="collection-item-price">15.000.000 <span style="text-decoration: underline;">đ</span></div>
                  <button class="collection-item-btn">Thêm vào giỏ</button>
                </div>
              </div>
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
              <div class="col">
                <div class="collection-item">
                  <div class="collection-item-img">
                    <img src="../img/collec1.webp" alt="">
                  </div>
                  <div class="collection-item-name">Đèn người ôm bóng đèn</div>
                  <div class="collection-item-price">15.000.000 <span style="text-decoration: underline;">đ</span></div>
                  <button class="collection-item-btn">Thêm vào giỏ</button>
                </div>
              </div>
              <div class="col">
                <div class="collection-item">
                  <div class="collection-item-img">
                    <img src="../img/collec1.webp" alt="">
                  </div>
                  <div class="collection-item-name">Đèn người ôm bóng đèn</div>
                  <div class="collection-item-price">15.000.000 <span style="text-decoration: underline;">đ</span></div>
                  <button class="collection-item-btn">Thêm vào giỏ</button>
                </div>
              </div>
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
