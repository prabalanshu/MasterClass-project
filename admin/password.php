<?php
include("../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MasterClass Marketplace</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!--------------------------->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="
    margin-left: 1rem;
">MasterClass</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 35%;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-10">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../index.php">Go to Main Page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="courses.php">Add Course</a>
        </li>
        
		<li class="nav-item">
          <a class="nav-link" href="courses.php">Course List</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="contact_list.php">Contact List</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="index.php">LogOut</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="password.php">Change Password</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
<!--------------------------->
<center>
<div style="
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 80%;
	flex-direction:column;
">
<?php
if(isset($_POST["pass"])==true){
	

$pass=$_POST["pass"];
$sql="UPDATE `admin_login` SET `pass` = '$pass' WHERE `admin_login`.`id` = 1";
$re=mysqli_query($conn,$sql);
if($re==true){
	echo "<h2>Password Change Successfully</h2>";
}
}
?>
<form action="password.php" method="POST">
<input type="text" name="pass" placeholder="Enter your New Password" style="
    width: 25rem;
    height: 3rem;
    border-radius: 9px;
    outline: none;
    padding: 19px;
" required>
<button class="btn btn-primary"style="
    height: 5rem;
">Change My Password</button>
</form>
</div></center>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
