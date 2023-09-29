<?php include_once 'header.php';
include_once 'admin/php/db_conn.php';
$id=$_GET['id'];
$sql = "SELECT * FROM product WHERE id=$id";
$res = mysqli_query($conn,$sql);

if (mysqli_num_rows($res) > 0) {
    while ($rows = mysqli_fetch_assoc($res)) {
        $title=$rows['title'];
        $des=$rows['des'];
        $image_url=$rows['image_url'];
        $category=$rows['category'];
     }}
      ?>



<section class="page_banner" style="background-image: url(assets/images/bg/b2.jpg);">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 text-center">
    <h2 class="banner-title">Products</h2>
    <p class="breadcrumbs">
    <a href="index.php"><i class="twi-home"></i>Home</a><i class="twi-angle-right"></i>Products<i class="twi-angle-right"></i><?php echo $title ?>
    </p>
    </div>
    </div>
    </div>
</section>

<section class="singleProduct03">
<div class="container largeContainer">
<div class="row">
<div class="col-lg-6">
<div class="productSlide02">
<div class="sp_img">
<img src="admin/<?=$image_url?>" alt="">
</div>
<?php 
          $sql = "SELECT * FROM product_image WHERE work_id='$id' ORDER BY id DESC";
          $res = mysqli_query($conn,$sql);

          if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {  ?>
            
<div class="sp_img">
<img src="admin/uploads/<?=$row['image_url']?>" alt="">
</div>
<?php } } ?>
<!-- <div class="sp_img">
<img src="assets/images/single-product/3.png" alt="">
</div>
<div class="sp_img">
<img src="assets/images/single-product/4.png" alt="">
</div>
<div class="sp_img">
<img src="assets/images/single-product/6.png" alt="">
</div> -->
</div>
<ul class="indicator-slider02">
<li role="presentation">
<div class="idItem">
<img src="admin/<?=$image_url?>" alt="">
</div>
</li>
<?php 
          $sql = "SELECT * FROM product_image WHERE work_id='$id' ORDER BY id DESC";
          $res = mysqli_query($conn,$sql);

          if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {  ?>
<li role="presentation">
<div class="idItem">
<img src="admin/uploads/<?=$row['image_url']?>" alt="">
</div>
</li>
<?php } } ?>

</ul>
</div>
<div class="col-lg-6">
<div class="product_details">
<h3><?php echo $title ?></h3>

 <div class="pi01Price clearfix">
<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>175.00</bdi></span></span>
</div>
<div class="pd_excrpt">
<p>
Sumptuous, filling, and temptingly healthy, our Biona Organic Granola with Wild Berries is just the thing to get you out of bed. The goodness of rolled wholegrain oats are combined
</p>
</div>
<div class="qty_weight">
<div class="cart_quantity clearfix">
<div class="quantity quantityd clearfix">
<button type="button" class="minus qtyBtn btnMinus">-</button>
<input type="number" class="carqty input-text qty text" name="quantity" value="1">
<button type="button" class="plus qtyBtn btnPlus">+</button>
</div>
</div>
<button type="submit" class="organ_btn">Add To Cart</button>
</div>
<div class="pro_meta clearfix">
<div class="mtItem02">
<span>Sku:</span>
3465
</div>
<div class="mtItem02">
<span>Category:</span>
<a href="shop.html">Vegetable</a>
</div>
<div class="mtItem02">
<span>Tags:</span>
<a href="shop.html">Natural</a>, <a href="shop.html">Organic</a>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="product_tabarea">
<ul class="nav nav-tabs productTabs" id="productTabs" role="tablist">
<li class="nav-item" role="presentation">
<a class="active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
</li>
<li class="nav-item" role="presentation">
<a id="additionalinfo-tab" data-toggle="tab" href="#additionalinfo" role="tab" aria-controls="additionalinfo" aria-selected="false">Additional Information</a>
</li>
<li class="nav-item" role="presentation">
<a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
</li>
</ul>
<div class="tab-content">
<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
<div class="pdtci_content">
<p>
Integer hendrerit a diam quis ullamcorper. Proin leo libero, porttitor sit amet ullamcorper nec, vehicula sed enim. Nullam et augue et eros pellentesque suscipit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
</p>
</div>
</div>
<div class="tab-pane fade" id="additionalinfo" role="tabpanel" aria-labelledby="additionalinfo-tab">
<div class="adinfo">
<table>
<tbody>
<tr>
<th>Weight:</th>
<td>0.5 Kg, 1 Kg, 2 Kg, 5 Kg</td>
</tr>
<tr>
<th>Dim:</th>
<td>15 x 15 x 10 cm</td>
</tr>
<tr>
<th>Color:</th>
<td>Black, Green, Mixed, Red, White</td>
</tr>
<tr>
<th>Size:</th>
<td>Extra Large, Extra Small, Medium, Small</td>
</tr>
<tr>
<th>Size:</th>
<td>Extra Large, Extra Small, Medium, Small</td>
</tr>
<tr>
<th>Size:</th>
<td>Extra Large, Extra Small, Medium, Small</td>
</tr>
<tr>
<th>Size:</th>
<td>Extra Large, Extra Small, Medium, Small</td>
</tr>
<tr>
<th>Size:</th>
<td>Extra Large, Extra Small, Medium, Small</td>
</tr>
<tr>
<th>Size:</th>
<td>Extra Large, Extra Small, Medium, Small</td>
</tr>
<tr>
<th>Size:</th>
<td>Extra Large, Extra Small, Medium, Small</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
<div class="pdtci_content">
<div class="comment_area">
<div class="sic_comments">
<h3 class="sicc_title">03 Reviews</h3>
<ol class="sicc_list">
<li>
<article class="single_comment productComent clearfix ">
<img src="assets/images/blog/c1.jpg" alt="Amy Burton">
<h4 class="cm_subject">Good Tours</h4>
<div class="sc_content">
<p>Ed id interdum urna. Nam ac elit a ante commodo tristique. Duis lacus urna, condimentum a vehicula a, hendrerit ac nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
<span class="cm_date">June 6, 2021 <span>- BY</span> Milon Non</span>
<div class="ratings">
<i class="twi-star"></i>
<i class="twi-star"></i>
<i class="twi-star"></i>
<i class="twi-star"></i>
<i class="twi-star"></i>
</div>
</article>
</li>
<li>
<article class="single_comment productComent clearfix ">
<img src="assets/images/blog/c1.jpg" alt="Amy Burton">
<h4 class="cm_subject">So Good</h4>
<div class="sc_content">
<p>Ed id interdum urna. Nam ac elit a ante commodo tristique. Duis lacus urna, condimentum a vehicula a, hendrerit ac nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
<span class="cm_date">June 6, 2021 <span>- BY</span> Milon Non</span>
<div class="ratings">
<i class="twi-star"></i>
<i class="twi-star"></i>
<i class="twi-star"></i>
<i class="twi-star"></i>
<i class="twi-star"></i>
</div>
</article>
</li>
</ol>
</div>
<div class="commentForm productCommentForm">
<h3 class="sicc_title">Add a Review</h3>
<form action="#" method="post" class="row">
<div class="col-md-6 name">
<input placeholder="Your Name *" name="author" type="text">
</div>
<div class="col-md-6 email">
<input placeholder="Email Address *" name="email" type="email">
</div>
<div class="col-md-12">
<input placeholder="Subject" name="subject" type="text">
</div>
<div class="col-md-12">
<textarea name="comment" placeholder="Your Comment"></textarea>
</div>
<div class="col-md-12">
<button class="organ_btn" type="submit">Submit Review</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="related_area">
<div class="subTitle sbsm">Nature Only</div>
<h2 class="secTitle">Related Product</h2>
<div class="related_carousel02 owl-carousel">
<div class="productItem04">
<div class="proThumb04">
<img src="assets/images/product/11.png" alt="">
</div>
<div class="product_content04">
<div class="prLabels">
<p class="justin">Fresh</p>
<p class="off">-20 Off</p>
</div>
 <h3><a href="single-product.html">Vegan Egg Replacer</a></h3>
<div class="pi01Price">
<span class="price"><del>$200.00</del><ins>$280.00</ins></span>
</div>
<div class="ratings">
<i class="twi-star"></i>
<i class="twi-star"></i>
<i class="twi-star"></i>
<i class="twi-star"></i>
<i class="twi-star1"></i>
<span>(01)</span>
</div>
</div>
<div class="piActionBtns">
<a class="cart" href="cart.html"><i class="icon-shopping-cart"></i></a>
<a class="wishlist" href="wishlist.html"><i class="twi-heart1"></i></a>
</div>
</div>
<div class="productItem04">
<div class="proThumb04">
<img src="assets/images/product/12.png" alt="">
</div>
<div class="product_content04">
<div class="prLabels">
<p class="justin">Fresh</p>
</div>
<h3><a href="single-product.html">Vegan Egg Replacer</a></h3>
<div class="pi01Price">
<span class="price"><del>$200.00</del><ins>$280.00</ins></span>
</div>
<div class="ratings">
<i class="twi-star"></i>
<i class="twi-star"></i>
<i class="twi-star"></i>
<i class="twi-star"></i>
<i class="twi-star1"></i>
<span>(01)</span>
</div>
</div>
<div class="piActionBtns">
<a class="cart" href="cart.html"><i class="icon-shopping-cart"></i></a>
<a class="wishlist" href="wishlist.html"><i class="twi-heart1"></i></a>
</div>
</div>
<div class="productItem04">
<div class="proThumb04">
<img src="assets/images/product/13.png" alt="">
</div>
<div class="product_content04">
<div class="prLabels">
<p class="justin">Fresh</p>
<p class="off">-20 Off</p>
</div>
<h3><a href="single-product.html">Vegan Egg Replacer</a></h3>
<div class="pi01Price">
<span class="price"><del>$200.00</del><ins>$280.00</ins></span>
</div>
<div class="ratings">
<i class="twi-star"></i>
<i class="twi-star"></i>
 <i class="twi-star"></i>
<i class="twi-star"></i>
<i class="twi-star1"></i>
<span>(01)</span>
</div>
</div>
<div class="piActionBtns">
<a class="cart" href="cart.html"><i class="icon-shopping-cart"></i></a>
<a class="wishlist" href="wishlist.html"><i class="twi-heart1"></i></a>
</div>
</div>
<div class="productItem04">
<div class="proThumb04">
<img src="assets/images/product/14.png" alt="">
</div>
<div class="product_content04">
<div class="prLabels">
<p class="justin">Fresh</p>
</div>
<h3><a href="single-product.html">Vegan Egg Replacer</a></h3>
<div class="pi01Price">
<span class="price"><del>$200.00</del><ins>$280.00</ins></span>
</div>
<div class="ratings">
<i class="twi-star"></i>
<i class="twi-star"></i>
<i class="twi-star"></i>
<i class="twi-star"></i>
<i class="twi-star1"></i>
<span>(01)</span>
</div>
</div>
<div class="piActionBtns">
<a class="cart" href="cart.html"><i class="icon-shopping-cart"></i></a>
<a class="wishlist" href="wishlist.html"><i class="twi-heart1"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<?php include_once 'footer.php'; ?>
