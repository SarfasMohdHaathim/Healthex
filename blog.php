<?php include_once 'header.php';
include_once 'admin/php/db_conn.php'; 
?>


<section class="page_banner" style="background-image: url(assets/images/bg/b2.jpg);">
<div class="container">
<div class="row">
<div class="col-lg-12 text-center">
<h2 class="banner-title">Blog Grid</h2>
<p class="breadcrumbs">
<a href="index.php"><i class="twi-home"></i>Home</a><i class="twi-angle-right"></i>Blog Grid
</p>
</div>
</div>
</div>
</section>


<section class="blogPage">
<div class="container largeContainer">
<div class="row">

<?php 
          $sql = "SELECT * FROM blog ORDER BY id DESC";
          $res = mysqli_query($conn,$sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($row = mysqli_fetch_assoc($res)) {  ?>



<div class="col-lg-4 col-md-6">
<div class="blogItem01 mb70">
<div class="blogThumb">
<img src="admin/<?=$row['image_url']?>" alt="">
<div class="blogDate">09 Jul</div>
</div>
<div class="blogContent">
<div class="bmeta">
<span><i class="twi-calendar-alt1"></i>By <a href="blog1.php">Admin</a></span>-<span><i class="twi-comment"></i><a href="single-blog.php">2 Comments</a></span>
</div>
<h3><a href="single-blog.php?id=<?=$row['id']?>"><?=$row['title']?></a></h3>
</div>
</div>
</div>

<?php }} ?>
</div>
<!-- <div class="row">
<div class="col-lg-12">
<div class="organ_pagination text-center">
<a class="prev" href="blog1.php"><i class="twi-arrow-left"></i></a>
<span class="current">1</span>
<a href="blog2.php">2</a>
<a href="blog2.php">3</a>
<a href="blog2.php">4</a>
<a class="next" href="blog2.php"><i class="twi-arrow-right"></i></a>
</div>
</div>
</div> -->
</div>
</section>

<?php include_once 'footer.php'; ?>
