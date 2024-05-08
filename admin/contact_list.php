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
          <a class="nav-link " href="courses.php">Course List</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" href="contact_list.php">Contact List</a>
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
<style>
    body {
        font-family: Arial, sans-serif;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>

<h2>Messages</h2>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>
    </tr>
  </thead>
  <tbody>
    <?php
	
$sql = "SELECT * FROM `contact`";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	//  echo "id: " . $row["id"]. " <br>- image URL: " . $row["img_url"]. " <br>Course Title:" . $row["c_title"]."<br>price".$row["c_price"]. "<br>";
  
	?>
	<tr>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["message"]; ?></td>
    </tr>
    <?php 
  }
}
	?>
    <!-- Add more rows as needed -->
  </tbody>
</table>

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
