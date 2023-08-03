<?php 
if (isset($_POST['submit'])) {

    include_once 'db_conn.php';
	$title=$des=" ";
	$title=$_POST['title'];
				// create table if not exist
				$query="CREATE TABLE IF NOT EXISTS category(id INT AUTO_INCREMENT primary key NOT NULL,
				title VARCHAR(100));";
				mysqli_query($conn, $query);

				// Insert into Database
				$sql = "INSERT INTO category(title) 
				        VALUES('$title')";
				mysqli_query($conn, $sql);
				header("Location: ../add-category.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: ../add-category.php?error=$em");
	header("Location: ../add_category.php");
}
?>