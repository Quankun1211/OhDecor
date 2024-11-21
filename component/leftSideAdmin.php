<?php
  if(isset($_GET['act'])) {
    $act = $_GET['act'];
    $adCat = "";
    $adBrand = "";
    $adProd = "";
    $adOrdered = "";
    $addCat = "";
    $addBrand = "";
    $addProd = "";
    switch($act) {
      case '':
        $adCat = "active";
        $adBrand = "";
        $adProd = "";
        $adOrdered = "";
        $addCat = "";
        $addBrand = "";
        $addProd = "";
        break;
      case 'adBrand':
        $adCat = "";
        $adBrand = "active";
        $adProd = "";
        $adOrdered = "";
        $addCat = "";
        $addBrand = "";
        $addProd = "";
        break;
      case 'adProd':
        $adCat = "";
        $adBrand = "";
        $adProd = "active";
        $adOrdered = "";
        $addCat = "";
        $addBrand = "";
        $addProd = "";
        break;
      case 'adOrdered':
        $adCat = "";
        $adBrand = "";
        $adProd = "";
        $adOrdered = "active";
        $addCat = "";
        $addBrand = "";
        $addProd = "";
        break;
      case 'addCat':
        $adCat = "";
        $adBrand = "";
        $adProd = "";
        $adOrdered = "";
        $addCat = "active";
        $addBrand = "";
        $addProd = "";
        break;
      case 'addBrand':
        $adCat = "";
        $adBrand = "";
        $adProd = "";
        $adOrdered = "";
        $addCat = "";
        $addBrand = "active";
        $addProd = "";
        break;
      case 'addProd':
        $adCat = "";
        $adBrand = "";
        $adProd = "";
        $adOrdered = "";
        $addCat = "";
        $addBrand = "";
        $addProd = "active";
        break;
      default:
        $adCat = "active";
        $adBrand = "";
        $adProd = "";
        $adOrdered = "";
        $addCat = "";
        $addBrand = "";
        $addProd = "";
        break;
    }
  }
?>
<div class="left-side">
  <div class="col">
    <div class="list-select">
      <a href="index.php?act=" class="<?php echo $adCat ?>">Danh sách danh mục</a>
      <a href="adminBrand.php?act=adBrand" class="<?php echo $adBrand ?>">Danh sách nhãn sản phẩm</a>
      <a href="adminProd.php?act=adProd" class="<?php echo $adProd ?>">Danh sách sản phẩm</a>
      <a href="ordered.php?act=adOrdered" class="<?php echo $adOrdered ?>">Danh sách khách hàng đặt hàng</a>
    </div>
    <ul class="list-admin">
      <li><a href="CategoryAdd.php?act=addCat" class="<?php echo $addCat ?>">Thêm danh mục</a></li>
      <li><a href="BrandAdd.php?act=addBrand" class="<?php echo $addBrand ?>">Thêm nhãn sản phẩm</a></li>
      <li><a href="ProductAdd.php?act=addProd" class="<?php echo $addProd ?>">Thêm sản phẩm</a></li>
    </ul>
  </div>
</div>