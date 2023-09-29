<?php 
if (isset($_POST['submit'])) {

    $conn  = mysqli_connect("localhost", "akinokib_sarfas", "Hacker@89", "akinokib_healthex");
	$title=$des=" ";
	$id=$_POST['id'];
	$image=$_FILES['image'];
	$img_name = $_FILES['image']['name'];
	$img_size = $_FILES['image']['size'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$error = $_FILES['image']['error'];
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				
				$new_img_name = uniqid("GAllery-", true).'.'.$img_ex_lc;
				$img_upload_path = '../uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				// create table if not exist
				$query="CREATE TABLE IF NOT EXISTS product_image(id INT AUTO_INCREMENT primary key NOT NULL,
				work_id VARCHAR(500),
				image_url VARCHAR(255));";
				mysqli_query($conn, $query);

				// Insert into Database
				$sql = "INSERT INTO product_image(work_id,image_url) 
				        VALUES('$id','$new_img_name')";
				mysqli_query($conn, $sql);
				header("Location: ../add-product_image.php?id=$id");
			}
		}

?>