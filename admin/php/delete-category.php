<?php  

if(isset($_GET['id'])){
   include "db_conn.php";
    

	$id = $_GET['id'];
   

	$sql = "DELETE FROM category
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);

  
   // if (file_exists($filePath)) {
      // }
  
   if ($result) {
   	  header("Location: ../add-category.php");
   }else {
      header("Location: ../add-category.php");
   }

}