<?php include_once 'header.php';
include_once 'admin/php/db_conn.php';
$id=$_GET['id'];
$sql = "SELECT * FROM blog WHERE id=$id";
$res = mysqli_query($conn,$sql);

if (mysqli_num_rows($res) > 0) {
    while ($rows = mysqli_fetch_assoc($res)) {
        $title=$rows['title'];
        $des=$rows['des'];
        $image_url=$rows['image_url'];
        $Pharagraph1=$rows['Pharagraph1'];
        $Pharagraph2=$rows['Pharagraph2'];
        $Pharagraph3=$rows['Pharagraph3'];
     }} ?>

<section class="page_banner" style="background-image: url(assets/images/bg/b2.jpg);">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 text-center">
    <h2 class="banner-title">BLOG</h2>
    <p class="breadcrumbs">
    <a href="index.html"><i class="twi-home"></i>Home</a><i class="twi-angle-right"></i>Blog<i class="twi-angle-right"></i> <?php echo $title ?>
    </p>
    </div>
    </div>
    </div>
    </section>



<section class="singleBlog">
<div class="container largeContainer">
<div class="row">
<div class="col-xl-9 col-lg-8 padRight">
<div class="sic_the_content clearfix">
    
<blockquote class="wp-block-quote">
    <p>
    <?php echo $title ?>
    </p>
    </blockquote>
    <p>
<?php echo $Pharagraph1 ?>
</p>
<figure class="wp-block-image">
<img src="admin/<?php echo $image_url ?>" alt="">
</figure>

<p>
    <?php echo $Pharagraph2 ?>
</p>
<p>
<?php echo $Pharagraph3 ?>
</p>
</div>

</div>
<div class="col-xl-3 col-lg-4">
<div class="sidebar">
<aside class="widget widget_blog">
<h3 class="widget_title">Blog Posts</h3>

<?php 
        $sql = "SELECT * FROM blog ORDER BY id DESC LIMIT 3";
        $res = mysqli_query($conn, $sql);
          if (mysqli_num_rows($res) > 0) {
          	while ($row = mysqli_fetch_assoc($res)) {  ?>


<div class="pp_post_item">
<img src="admin/<?=$row['image_url']?>" alt="">
<h5><a href="single-blog.php?id=<?=$row['id']?>"><?=$row['title']?></a></h5>
<span><?=$row['date']?></span>
</div>
<?php }} ?>
</aside>
</div>
</div>
</div>
</div>
</section>

<?php include_once 'footer.php'; ?>
