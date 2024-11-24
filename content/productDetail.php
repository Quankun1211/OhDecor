<?php
    $product_id = $_GET['product_id'];
    include "../class/productClass.php";
    $product = new Product();
?>

<?php
    include "../component/header.php";
?>
<?php
    $get_product = $product->get_product($product_id);
    $res = $get_product->fetch_assoc();
?>
    <div class="product_wrap">
        <div class="breadcrumb">
            <a href="#">Trang chủ</a> &gt;
            <a href="#">Ghế</a> &gt;
            <span><?php echo $res['product_name']; ?></span>
        </div>

        <div class="product-container">
            <div class="product-image">
                <img src="../admin/uploads/<?php echo $res['product_image']; ?>"
                    alt="Ghế da Armchair Oakway">
            </div>

            <div class="product-details">

                <h1><?php echo $res['product_name']; ?></h1>
                <h1 class="quantity-origin">
                    <strong class="quantity-strong">Còn lại:</strong>
                    <p class="quantity-left"><?php echo $res['product_quantity'] ?></p> 
                </h1>
                <p><strong>Mã sản phẩm:</strong> Đang cập nhật...</p>
                <p class="price">
                    <span><?php echo $res['product_price']; ?>₫ </span>
                </p>

                <h2>Mô tả</h2>
                <p><?php echo $res['product_description'] ?></p>
                <p><strong>Màu sắc:</strong> Đen</p>
                <div class="color-options">
                </div>

                <div class="quantity">
                    <p class="quantity_title"><strong>Số lượng:</strong></p>
                    <div class="qty-btn">-</div>
                    <input type="text" class="quantity_num" value="0" name="quantity">
                    <div class="qty-btn">+</div>
                </div>

                <div class="actions">
                    <button class="buy-now"><a href="cart.php?product_id=<?php echo $res['product_id'] ?>">Mua ngay</a></button>
                </div>
            </div>
        </div>

    </div>
<?php
    include "../component/footer.php";
?>
<script src="../js/productDetail2.js"></script>