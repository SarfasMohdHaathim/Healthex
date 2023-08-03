<?php

@include 'php/db_conn.php';

session_start();

if(isset($_POST['submit'])){

   $name = ($_POST['username']);
   $pass = ($_POST['password']);


   $select = "SELECT * FROM users WHERE username = '$name' && pass = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
      $_SESSION['admin'] = $name;
         header("location:contact.php");
   }
   else{
      $error = 'incorrect email or password!';
      header("location:login.php?error=$error");
   }
  

};
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
					<h3 class="text-center mb-4">
					<?php
$error = isset($_GET['error']) ? $_GET['error'] : '';

if (!empty($error)) {
    echo '<p class="text-danger" style="font-size:15px";>' . htmlspecialchars($error) . '</p>';
}
?>
					</h3>
		      	<div class="icon d-flex align-items-center justify-content-center">
					
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Have an account?</h3>
						<form action="#" class="login-form" method="POST">
		      		<div class="form-group">
		      			<input type="text" name="username" class="form-control rounded-left" placeholder="Username" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="submit" class="btn btn-primary rounded submit p-3 px-5">Get Started</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>
	</body>
</html>
