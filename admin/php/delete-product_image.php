<?php  

if(isset($_GET['id'])){
   include "db_conn.php";
    

	$id = $_GET['id'];

	$sql = "SELECT * FROM product_image
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   while ($row = mysqli_fetch_assoc($result)) {
    $work_id = $row['work_id'];

}
	$sql = "DELETE FROM product_image
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../add-product_image.php?id=$work_id");
   }else {
      header("Location: ../add-product_image.php?id=$work_id");
   }

}else {
	header("Location: ../product.php");
}