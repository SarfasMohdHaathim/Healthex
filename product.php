
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


<section class="shopPage">
<div class="container largeContainer">
<div class="row">
<div class="col-md-12">
<div class="shopController">
<div class="filterBy">
<select name="orderby" class="orderby">
<option value="filter" selected="selected">Filter</option>
<option value="new">New Product</option>
<option value="featured">Featured Product</option>
<option value="sale">Sale Product</option>
<option value="bestsale">Best Seller</option>
<option value="random">Random Product</option>
</select>
</div>
<div class="sorting">
<h5>Sort by:</h5>
<select name="orderby" class="orderby">
<option value="menu_order" selected="selected">Default Sorting</option>
<option value="new">Newest Products</option>
<option value="popular">Popular Products</option>
<option value="rating">Average Rating</option>
<option value="price">Price: Low to High</option>
<option value="price-desc">Price: High to Low</option>
</select>
</div>
<ul class="nav producView" role="tablist">
<li role="presentation">
<a class="active" data-toggle="tab" href="#grid" role="tab" aria-selected="true"><i class="icon-grid"></i></a>
</li>
<li role="presentation">
<a data-toggle="tab" href="#list" role="tab" aria-selected="false"><i class="icon-list"></i></a>
</li>
</ul>
</div>
</div>
</div>
<div class="tab-content">
<div class="tab-pane fade show active" id="grid" role="tabpanel">
<div class="row custome">
    
<?php 
          $sql = "SELECT * FROM product ORDER BY id DESC";
          $res = mysqli_query($conn,$sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($row = mysqli_fetch_assoc($res)) {  ?>
<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
<div class="productItem06 p06bg">
<div class="proThumb04">
<img src="admin/<?=$row['image_url']?>" alt="">
</div>
<div class="product_content04">
<div class="pitem"><?=$row['category']?></div>
<h3><a href="single-product.html"><?=$row['title']?></a></h3>
<div class="pi01Price">
<span class="price"><del>$200.00</del><ins>$280.00</ins></span>
</div>
<div class="prLabels mt-3">
    <a href="single-product.php?id=<?=$row['id']?>">
<p class="justin">View Details</p></a>
</div>
</div>
</div>
</div>
<?php } } ?>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="organ_pagination text-center">
<a class="prev" href="blog1.html"><i class="twi-arrow-left"></i></a>
<span class="current">1</span>
<a href="blog2.html">2</a>
<a href="blog2.html">3</a>
<a href="blog2.html">4</a>
<a class="next" href="blog2.html"><i class="twi-arrow-right"></i></a>
</div>
<div class="show-results">
<h5>Item 1 to 12 of 45 Total</h5>
</div>
</div>
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
