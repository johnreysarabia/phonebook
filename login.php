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
			background-image: url("img/image8.jpg"); 
			color: white;
			width: 100%;
		}
	</style>
</head>
<body>
	<div class="container"><br/>
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($db, $_POST['username']);
	$pass = mysqli_real_escape_string($db, $_POST['password']);


	if($user == "" || $pass == "") {
		echo "<br/>";
	} else {
		$result = mysqli_query($db, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
					or die("Could not execute the select query.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
		} else {
			header('Location: login.php');
		}

		if(isset($_SESSION['valid'])) {
			header('Location: view.php');			
		}
	}
} else {
?>

	<main class="bd-masthead" id="content" role="main">
  				<div class="container">
    					<div class="row align-items-center">
      						<div class="col-2 mx-auto col-md-4 text-md-left order-md-4">
      						</div>
							<div class="col-md-8 order-md-4 text-center text-md-left pr-md-2">
								<form name="form1" method="post" action=""><br/>
									<div class="container">
										<h2>Log In</h2><img src="img/image2.png" width="200" height="100">
									</div><br/><br/>
										<div class="center">
											<div class="col-md-6 mb-3">
												<label for="validationServer01">username</label>
													<input type="text" name="username" class="form-control is-valid" id="validationServer01"  required>
											</div>
										</div>
										<div class="center">
											<div class="col-md-6 mb-3">
												<label for="validationServer01">password</label>
													<input type="password" name="password" class="form-control is-valid" id="validationServer01"  required>
											</div>
										</div>
											Already have an account ? &nbsp;
										<button class="btn btn-outline-success" type="submit" name="submit" value="Submit">log in</button>
										 <a class="btn btn-sm btn-outline-info" href="register.php" role="button">sign up</a>
								</form>
      					</div>
    				</div>

<?php
}
?>
</body>
</html>
