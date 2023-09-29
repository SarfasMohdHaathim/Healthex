<?php 
if (isset($_POST['submit'])) {

    $conn  = mysqli_connect("localhost", "akinokib_sarfas", "Hacker@89", "akinokib_healthex");
	$title=$des=" ";
	$title=$_POST['title'];
	$category=$_POST['category'];
	$title=str_replace("'", "''", $title);
	$des=$_POST['des'];
	$des=str_replace("'", "''", $des);
	$p1=$_POST['p1'];
	$p1=str_replace("'", "''", $p1);
	$p2=$_POST['p2'];
	$p2=str_replace("'", "''", $p2);
	$p3=$_POST['p3'];
	$p3=str_replace("'", "''", $p3);
	$date = date("d M");;
	session_start();
	$image=$_SESSION['image'];
    unset($_SESSION['image']);

	
	
				// create table if not exist
				$query="CREATE TABLE IF NOT EXISTS blog(id INT AUTO_INCREMENT primary key NOT NULL,
				title TEXT,
				des TEXT,
				Pharagraph1 TEXT,
				Pharagraph2 TEXT,
				Pharagraph3 TEXT,
				date varchar(255),
				image_url VARCHAR(255));";
				mysqli_query($conn, $query);

				// Insert into Database
				$sql = "INSERT INTO blog(title,des,Pharagraph1,Pharagraph2,Pharagraph3,date,image_url) 
				        VALUES('$title','$des','$p1','$p2','$p3','$date','$image')";
				mysqli_query($conn, $sql);
				header("Location: ../blog.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: ../blog.php?error=$em");
	header("Location: ../blog.php");
}
?>