<?php
include("config.php");
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
    margin-left: 4rem;
">MasterClass</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 53%;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-10">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="courses.php">Courses</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
<!--------------------------->
<section>
<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/1.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/2.jpg" class="d-block w-100" alt="...">
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<!--------------------------->

<!--------------------------->

<!--------------------------->


<center> <h2>New Courses</h2></center>
  <div class="row align-items-start">
    <?php
  
$sql = "SELECT id, img_url,c_title,c_dis,c_price,c_url FROM course_list";
$result = mysqli_query($conn, $sql);

$ky=0;
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	//  echo "id: " . $row["id"]. " <br>- image URL: " . $row["img_url"]. " <br>Course Title:" . $row["c_title"]."<br>price".$row["c_price"]. "<br>";
if($row["id"]<=6){
	
 
 
  ?>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="admin/<?php echo $row["img_url"] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row["c_title"] ?></h5>
    <p class="card-text"><?php echo $row["c_dis"] ?></p>
    <a href="<?php echo $row["c_url"] ?>" class="btn btn-primary">Buy Now Just <?php echo $row["c_price"] ?></a>
  </div>
</div>
    </div>
	<?php
}
$ky=$ky+1;
   }
} 
  
   ?>
  
   </div>
</div>
<!--------------------------->




<!--------------------------->
<div class="container" style="
    margin-top: 3rem;
">
<center> <h2><?php
if(isset($_POST["email"])==true){
$email=$_POST["email"];
$sqls="INSERT INTO `subscribe`(`id`, `email`) VALUES (NULL,'$email')";
$res=mysqli_query($conn,$sqls);
if($res==true){
	echo "Thank You For Subscribe";
}else{
	echo "Something is wrong";
}
}else{
	echo "Subscribe For Update";
}
?></h2></center>
<div class="mb-3">

<form action="index.php" method="POST">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email"  name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
<button type="button" class="btn btn-primary" style="margin-top:2rem;">Subscribe</button>
</form>
</div>

</div>
<!--------------------------->




<footer style="
    margin-top: 3rem;
">
    <div class="container" >
        <p>&copy; 2024 MasterClass Marketplace. All rights reserved.</p>
    </div>
</footer>

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
