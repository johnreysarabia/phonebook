<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>phonebook</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body {
			background-image: url("img/image3.jpg"); 
			color: white;
			width: 100%;
		}
	</style>
</head>
<body>

	<div class="container"><br/><br/><br/>
		<div class="header">
			<center>
<img src="img/avatar.png" width="500" height="400">
<h1>PHONEBOOK</h1>
<a class="btn btn-sm btn-outline-success" href="register.php" role="button">Get Started</a>&nbsp;&nbsp;&nbsp;
<a class="btn btn-sm btn-outline-info" href="login.php" role="button">log in</a>
		</div>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($db, "SELECT * FROM login");
	?>
	
	<?php	
	}
	?>
	
	<main class="bd-masthead" id="content" role="main">
  				<div class="container">
    					<div class="row align-items-center">
      						<div class="col-2 mx-auto col-md-4 text-md-left order-md-4">
      						</div>
							<div class="col-md-8 order-md-2 text-center text-md-left pr-md-2">
							
								
							</div>
    					</div>
</div><br/><br/>
	</div>
</body>
</html>
