<?php  

if(isset($_GET['id'])){
   include "db_conn.php";
    

	$id = $_GET['id'];
   

	$sql = "DELETE FROM product
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);

   if ($result) {
   	  header("Location: ../product.php");
   }else {
      header("Location: ../product.php");
   }

}