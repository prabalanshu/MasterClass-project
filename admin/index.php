<?php
include("../config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>


	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 form-container">
				<div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
					
					<div class="heading mb-3">
						<h4>Login into your Admin account</h4>
					</div>
					<?php
		if(isset($_POST["email"])==true && isset($_POST["pass"])==true){
			
						
$sql = "SELECT * FROM `admin_login`";
$result = mysqli_query($conn, $sql);

$email=$_POST["email"];
$pass=$_POST["pass"];
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
if($row["email"]==$email && $row["pass"]==$pass){
	header('Location:dk.php');
}else{
	echo "<h2>Email or Password is Wrong</h2>";
}
  }
}
		}
		?>
				
					<form action="index.php" method="POST">
						<div class="form-input">
							<span><i class="fa fa-envelope"></i></span>
							<input type="email" name="email" placeholder="Email Address" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="pass" placeholder="Password" required>
						</div>
						<div class="row mb-3">
							<div class="col-6 d-flex">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="cb1">
									<label class="custom-control-label text-white" for="cb1">Remember me</label>
								</div>
							</div>
							<div class="col-6 text-right">
								<a href="#" class="forget-link">Forget password</a>
							</div>
						</div>
						<div class="text-left mb-3">
							<button type="submit" class="btn">Login</button>
						</div>
						
					</form>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
		</div>
	</div>
</body>
</html>