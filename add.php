<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body {
			background-image: url("img/image8.jpg"); 
			color: white;
			width: 100%;
		}
	</style>
</head>

<body>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="logout.php">logout</a>
							</div>
						</li>
					</ul>
				</form>
			</div>
	</nav>
<br/>
	<div class="container">
		<nav aria-label="breadcrumb" role="navigation">
			<div class="col-sm-5">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="view.php">View Contacts</a></li>
					<li class="breadcrumb-item active" aria-current="page">Add contact</li>
				</ol>
			</div>
		</nav>
	</div>
<br/>
<?php

include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phone_number = $_POST['phone_number'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$loginId = $_SESSION['id'];
	
		
	$result = mysqli_query($db, "INSERT INTO contacts(firstname, lastname, phone_number, email, address, login_id) VALUES('$firstname', '$lastname', '$phone_number', '$email', '$address', '$loginId')");
		header('location: view.php');
	} 
?>
<main class="bd-masthead" id="content" role="main">
  				<div class="container">
    					<div class="row align-items-center">
      						<div class="col-2 mx-auto col-md-4 text-md-left order-md-4">
      						</div>
							<div class="col-md-8 order-md-0 text-center text-md-left pr-md-2">
								<form name="form1" method="post" action=""><br/>
									<div class="container">
									</div><br/>
										<div class="row">
											<div class="col-md-6 mb-2">
												<label for="validationServer01">first name</label>
													<input type="text" name="firstname" class="form-control is-valid" id="validationServer01"  required>
											</div>&nbsp;
											<div class="col-md-6 mb-2">
												<label for="validationServer01">last name</label>
													<input type="text" name="lastname" class="form-control is-valid" id="validationServer01"  required>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6 mb-2">
												<label for="validationServer01">phone_number</label>
													<input type="phone_number" name="phone_number" class="form-control is-valid" id="validationServer01"  required>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6 mb-2">
												<label for="validationServer01">email</label>
													<input type="email" name="email" class="form-control is-valid" id="validationServer01"  required>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6 mb-2">
												<label for="validationServer01">address</label>
													<input type="address" name="address" class="form-control is-valid" id="validationServer01"  required>
										
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label"></label>
				<div class="col-sm-10">
					<button class="btn btn-outline-warning" type="submit" name="Submit" value="Add">Add</button>
				</div>
		</div>
	</form>
</div>
</body>
</html>
