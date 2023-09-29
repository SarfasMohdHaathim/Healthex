<?php 
if (isset($_POST['submit'])) {

    $conn  = mysqli_connect("localhost", "akinokib_sarfas", "Hacker@89", "akinokib_healthex");
	$title=$des=" ";
	$title=$_POST['title'];
	$des=$_POST['des'];
	$category=$_POST['category'];
	session_start();
	$image=$_SESSION['image'];
    unset($_SESSION['image']);
	$image1=$_SESSION['image1'];
    unset($_SESSION['image1']);
				// create table if not exist
				$query="CREATE TABLE IF NOT EXISTS product(id INT AUTO_INCREMENT primary key NOT NULL,
				title VARCHAR(100),
				des VARCHAR(100),
				category VARCHAR(100),
				image_url VARCHAR(255),
				image_url1 VARCHAR(255));";
				mysqli_query($conn, $query);

				// Insert into Database
				$sql = "INSERT INTO product(title,des,image_url,image_url1,category) 
				        VALUES('$title','$des','$image','$image1','$category')";
				mysqli_query($conn, $sql);
				header("Location: ../product.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: ../add-product.php?error=$em");
	header("Location: ../add_product.php");
}
?>