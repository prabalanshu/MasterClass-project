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
          <a class="nav-link" href="dk.php">Add Course</a>
        </li>
        
		<li class="nav-item">
          <a class="nav-link active" href="courses.php">Course List</a>
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
<div class="container" style="
    margin-top: 3rem;
">
<?php
if(isset($_POST["number"])==true){
	$id=$_POST["number"];
$sql_del="DELETE FROM `course_list` WHERE id=$id";
$res=mysqli_query($conn,$sql_del);
if($res==true){
	echo "Course Delete Successfully";
}else{
	echo "Something is wrong";
}
	
}
?>
  <div class="row align-items-start">
  <?php
  
$sql = "SELECT id, img_url,c_title,c_dis,c_price,c_url FROM course_list";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	//  echo "id: " . $row["id"]. " <br>- image URL: " . $row["img_url"]. " <br>Course Title:" . $row["c_title"]."<br>price".$row["c_price"]. "<br>";
  
  ?>
     <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="<?php echo $row["img_url"] ?>" class="card-img-top" alt="...">
  <div class="card-body">
  <p>Rs <?php echo $row["c_price"]?></p>
    <h5 class="card-title"><?php echo $row["c_title"] ?></h5>
    <p class="card-text"><?php echo $row["c_dis"] ?></p>
    <form method="post" action="courses.php">
	<input type="number" name="number" value="<?php echo $row["id"]?>" hidden></input>
	<button class="btn btn-primary">Delete</button>
	</form>
	
  </div>
</div>
    </div>	<?php
  }
}
	?>
   </div>
</div>
<!--------------------------->



<footer style="
    margin-top: 3rem;
">
    <div class="container">
        <p>&copy; 2024 MasterClass Marketplace. All rights reserved.</p>
    </div>
</footer>

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
