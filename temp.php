<?php include_once 'header.php'; 
include_once 'admin/php/db_conn.php';?>


<section class="page_banner" style="background-image: url(assets/images/bg/b2.jpg);">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 text-center">
    <h2 class="banner-title">Products</h2>
    <p class="breadcrumbs">
    <a href="index.php"><i class="twi-home"></i>Home</a><i class="twi-angle-right"></i>Products
    </p>
    </div>
    </div>
    </div>
</section>


<section class="productSection01">
    <div class="container largeContainer">
    <div class="row">
    <div class="col-lg-12 text-center">
    <div class="subTitle">Organic Products</div>
    <h2 class="secTitle">Organic & Fresh Products</h2>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <ul class="filter_menu shaff_filter text-center clearfix">
    <li class="active" data-group="all"><span>All</span><span>All</span></li>
    <li data-group="beverages"><span>Beverages</span><span>Beverages</span></li>
    <li data-group="butter_egg"><span>Butter & Eggs</span><span>Butter & Eggs</span></li>
    <li data-group="dried"><span>Dried</span><span>Dried</span></li>
    <li data-group="food"><span>Food</span><span>Food</span></li>
    </ul>
    </div>
    </div>
    <div class="row shaff_grid hasRoundedCorner">

    <?php 
          $sql = "SELECT * FROM product ORDER BY id DESC";
          $res = mysqli_query($conn,$sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($row = mysqli_fetch_assoc($res)) {  ?>



    <div class="col-xl-3 col-lg-4 col-md-6 shaff_item odd" data-groups='["all", "butter_egg", "food"]'>
    <div class="productItem01">
    <div class="proThumb">
    <img src="admin/<?=$row['image_url']?>" alt="">
    </div>
    <a class="hover" href="single-product.php"><img src="admin/<?=$row['image_url']?>" alt="" height="100"></a>
    <div class="product_content">
    <div class="ratings">

    </div>
    <div class="pitem">Meats</div>
    <h3><a href="single-product.php">Vegan Egg Replacer</a></h3>
    <div class="pi01Price">
    <span class="price"><del>$200.00</del><ins>$280.00</ins></span>
    </div>
    </div>
    <div class="piActionBtns">
    <a class="compare" href="single-product.php?id=<?=$row['id']?>"><i class="icon-move"></i></a>

    </div>
    <div class="prLabels">
    <p class="justin">Fresh</p>
    </div>
     <a class="wishlist" href="wishlist.php"><i class="twi-heart1"></i></a>
    </div>
    </div>


    <?php } } ?>
    <div class="col-xl-3 col-lg-4 col-md-6 shaff_item even" data-groups='["all", "beverages", "dried"]'>
    <div class="productItem01">
    <div class="proThumb">
    <img src="assets/images/product/2.png" alt="">
    </div>
    <a class="hover" href="single-product.php"><img src="assets/images/product/2.jpg" alt=""></a>
    <div class="product_content">
    <div class="pitem">Meats</div>
    <h3><a href="single-product.php">Vegan Egg Replacer</a></h3>
    <div class="pi01Price">
    <span class="price"><del>$200.00</del><ins>$280.00</ins></span>
    </div>
    </div>
    <div class="piActionBtns">
    <a class="compare" href="single-product.php"><i class="icon-move"></i></a>
    </div>
    <div class="prLabels">
    <p class="justin">Fresh</p>
    </div>
    <a class="wishlist" href="wishlist.php"><i class="twi-heart1"></i></a>
    </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 shaff_item odd" data-groups='["all", "butter_egg", "food"]'>
    <div class="productItem01">
    <div class="proThumb">
    <img src="assets/images/product/3.png" alt="">
    </div>
    <a class="hover" href="single-product.php"><img src="assets/images/product/3.jpg" alt=""></a>
    <div class="product_content">
    <div class="ratings">
    <i class="twi-star"></i>
    <i class="twi-star"></i>
    <i class="twi-star"></i>
    <i class="twi-star"></i>
    <i class="twi-star1"></i>
    <span>(01)</span>
    </div>
    <div class="pitem">Meats</div>
    <h3><a href="single-product.php">Vegan Egg Replacer</a></h3>
    <div class="pi01Price">
    <span class="price"><del>$200.00</del><ins>$280.00</ins></span>
    </div>
    </div>
    <div class="piActionBtns">
    <a class="quickview" href="single-product.php"><i class="icon-magnifying-glass"></i></a>
    <a class="cart" href="cart.php"><i class="icon-shopping-cart"></i></a>
    <a class="compare" href="single-product.php"><i class="icon-move"></i></a>
    </div>
    <div class="prLabels">
     <p class="justin">Fresh</p>
    </div>
    <a class="wishlist" href="wishlist.php"><i class="twi-heart1"></i></a>
    </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 shaff_item even" data-groups='["all", "beverages", "dried"]'>
    <div class="productItem01">
    <div class="proThumb">
    <img src="assets/images/product/4.png" alt="">
    </div>
    <a class="hover" href="single-product.php"><img src="assets/images/product/4.jpg" alt=""></a>
    <div class="product_content">
    <div class="ratings">
    <i class="twi-star"></i>
    <i class="twi-star"></i>
    <i class="twi-star"></i>
    <i class="twi-star"></i>
    <i class="twi-star1"></i>
    <span>(01)</span>
    </div>
    <div class="pitem">Meats</div>
    <h3><a href="single-product.php">Vegan Egg Replacer</a></h3>
    <div class="pi01Price">
    <span class="price"><del>$200.00</del><ins>$280.00</ins></span>
    </div>
    </div>
    <div class="piActionBtns">
    <a class="quickview" href="single-product.php"><i class="icon-magnifying-glass"></i></a>
    <a class="cart" href="cart.php"><i class="icon-shopping-cart"></i></a>
    <a class="compare" href="single-product.php"><i class="icon-move"></i></a>
    </div>
    <div class="prLabels">
    <p class="justin">Fresh</p>
    </div>
    <a class="wishlist" href="wishlist.php"><i class="twi-heart1"></i></a>
    </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 shaff_item odd" data-groups='["all", "butter_egg", "food"]'>
    <div class="productItem01">
    <div class="proThumb">
    <img src="assets/images/product/5.png" alt="">
    </div>
    <a class="hover" href="single-product.php"><img src="assets/images/product/5.jpg" alt=""></a>
    <div class="product_content">
    <div class="ratings">
    <i class="twi-star"></i>
    <i class="twi-star"></i>
    <i class="twi-star"></i>
    <i class="twi-star"></i>
    <i class="twi-star1"></i>
    <span>(01)</span>
    </div>
    <div class="pitem">Meats</div>
    <h3><a href="single-product.php">Vegan Egg Replacer</a></h3>
    <div class="pi01Price">
    <span class="price"><del>$200.00</del><ins>$280.00</ins></span>
    </div>
    </div>
    <div class="piActionBtns">
    <a class="quickview" href="single-product.php"><i class="icon-magnifying-glass"></i></a>
    <a class="cart" href="cart.php"><i class="icon-shopping-cart"></i></a>
    <a class="compare" href="single-product.php"><i class="icon-move"></i></a>
    </div>
    <div class="prLabels">
    <p class="justin">Fresh</p>
    </div>
    <a class="wishlist" href="wishlist.php"><i class="twi-heart1"></i></a>
    </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 shaff_item even" data-groups='["all", "beverages", "dried"]'>
    <div class="productItem01">
    <div class="proThumb">
    <img src="assets/images/product/6.png" alt="">
    </div>
    <a class="hover" href="single-product.php"><img src="assets/images/product/6.jpg" alt=""></a>
    <div class="product_content">
    <div class="ratings">
    <i class="twi-star"></i>
    <i class="twi-star"></i>
    <i class="twi-star"></i>
    <i class="twi-star"></i>
    <i class="twi-star1"></i>
    <span>(01)</span>
    </div>
    <div class="pitem">Meats</div>
    <h3><a href="single-product.php">Vegan Egg Replacer</a></h3>
    <div class="pi01Price">
    <span class="price"><del>$200.00</del><ins>$280.00</ins></span>
    </div>
    </div>
    <div class="piActionBtns">
    <a class="quickview" href="single-product.php"><i class="icon-magnifying-glass"></i></a>
    <a class="cart" href="cart.php"><i class="icon-shopping-cart"></i></a>
    <a class="compare" href="single-product.php"><i class="icon-move"></i></a>
    </div>
    <div class="prLabels">
    <p class="justin">Fresh</p>
    </div>
    <a class="wishlist" href="wishlist.php"><i class="twi-heart1"></i></a>
    </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 shaff_item odd" data-groups='["all", "butter_egg", "food"]'>
    <div class="productItem01">
    <div class="proThumb">
    <img src="assets/images/product/7.png" alt="">
    </div>
    <a class="hover" href="single-product.php"><img src="assets/images/product/7.jpg" alt=""></a>
    <div class="product_content">
    <div class="ratings">
    <i class="twi-star"></i>
    <i class="twi-star"></i>
    <i class="twi-star"></i>
    <i class="twi-star"></i>
    <i class="twi-star1"></i>
    <span>(01)</span>
    </div>
    <div class="pitem">Meats</div>
    <h3><a href="single-product.php">Vegan Egg Replacer</a></h3>
    <div class="pi01Price">
    <span class="price"><del>$200.00</del><ins>$280.00</ins></span>
    </div>
    </div>
    <div class="piActionBtns">
    <a class="quickview" href="single-product.php"><i class="icon-magnifying-glass"></i></a>
    <a class="cart" href="cart.php"><i class="icon-shopping-cart"></i></a>
    <a class="compare" href="single-product.php"><i class="icon-move"></i></a>
    </div>
    <div class="prLabels">
    <p class="justin">Fresh</p>
    </div>
    <a class="wishlist" href="wishlist.php"><i class="twi-heart1"></i></a>
    </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 shaff_item even" data-groups='["all", "beverages", "dried"]'>
    <div class="productItem01">
    <div class="proThumb">
    <img src="assets/images/product/8.png" alt="">
    </div>
    <a class="hover" href="single-product.php"><img src="assets/images/product/8.jpg" alt=""></a>
    <div class="product_content">
    <div class="ratings">
    <i class="twi-star"></i>
    <i class="twi-star"></i>
    <i class="twi-star"></i>
    <i class="twi-star"></i>
    <i class="twi-star1"></i>
    <span>(01)</span>
    </div>
    <div class="pitem">Meats</div>
    <h3><a href="single-product.php">Vegan Egg Replacer</a></h3>
    <div class="pi01Price">
    <span class="price"><del>$200.00</del><ins>$280.00</ins></span>
    </div>
    </div>
    <div class="piActionBtns">
    <a class="quickview" href="single-product.php"><i class="icon-magnifying-glass"></i></a>
    <a class="cart" href="cart.php"><i class="icon-shopping-cart"></i></a>
    <a class="compare" href="single-product.php"><i class="icon-move"></i></a>
    </div>
    <div class="prLabels">
    <p class="justin">Fresh</p>
    </div>
    <a class="wishlist" href="wishlist.php"><i class="twi-heart1"></i></a>
    </div>
    </div>
    <div class="col-md-1 shafSizer"></div>
    </div>
    </div>
    </section>


<section class="mailSection02 notopPadd">
<div class="container largeContainer">
<div class="row">
<div class="col-md-12">
<div class="ctaMail">
<div class="row">
<div class="col-lg-5">
<div class="subTitle">Don’t Miss Our Deals.</div>
<h2>EXCLUSIVE OFFERS & SALE</h2>
<p>Sign up and get a voucher of worth $250.00</p>
</div>
<div class="col-lg-7">
<div class="SubsrcribeForm btn_position">
<form action="#" method="post">
<input type="email" name="EMAIL" placeholder="Email Address">
<button type="submit">Subsrcribe Now</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<?php include_once 'footer.php'; ?>
