<?php  

if(isset($_GET['id'])){
   include "db_conn.php";
    

	$id = $_GET['id'];
   
   $sql = "SELECT * FROM blog
   WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   while($rows = mysqli_fetch_assoc($result)){
      $folderPath = '../';
      $fileName =$rows['image_url'];
      $filePath = '../'.$fileName;
      unlink($filePath);
   }

	$sql = "DELETE FROM blog
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../blog.php");
   }else {
      header("Location: ../blog.php");
   }

}else {
	header("Location: ../blog.php");
}
?>