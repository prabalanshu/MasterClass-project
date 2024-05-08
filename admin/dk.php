<?php
// Database connection
include("../config.php");

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $course_title = $_POST["course_title"];
    $course_description = $_POST["course_description"];
    $course_price = $_POST["course_price"];
    $buy_link = $_POST["buy_link"];

    // File upload handling
    $target_dir = "upload/"; // Change this to your desired directory
    $target_file = $target_dir . basename($_FILES["course_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["course_image"]["tmp_name"]);
        if($check !== false) {
          //  echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["course_image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["course_image"]["tmp_name"], $target_file)) {
           // echo "The file ". basename( $_FILES["course_image"]["name"]). " has been uploaded.";
            // Insert data into database
            $sql = "INSERT INTO `course_list`(`id`, `img_url`, `c_title`, `c_dis`, `c_price`, `c_url`)
            VALUES (NULL,'$target_file', '$course_title', '$course_description', '$course_price', '$buy_link')";

            if ($conn->query($sql) === TRUE) {
                echo "<h2>Course Add Successfully</h2>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

// Close connection
$conn->close();
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


<center>    <h2>Add Course</h2>
    <form action="dk.php" method="post"  enctype="multipart/form-data">
       
        <div style="margin-top:1rem;">
            <label for="course_title">Course Title:</label><br>
            <input type="text" id="course_title" name="course_title" style="margin-top:2rem; width: 24rem;" placeholder="Course Name" required>
        </div>
        <div style="margin-top:1rem;">
            <label for="course_description">Short Description:</label><br>
            <textarea id="course_description" name="course_description" rows="4" cols="50" style="margin-top:2rem; width: 24rem;" placeholder="Enter Description.."required></textarea>
        </div>
        <div style="margin-top:1rem;">
            <label for="course_price">Price:</label><br>
            <input type="number" id="course_price" name="course_price" style="margin-top:2rem; width: 24rem;" placeholder="Enter Price" required>
        </div>
		
		<div style="margin-top:1rem;">
            <label for="course_price">Buy Link:</label><br>
            <input type="text" id="course_price" name="buy_link" style="margin-top:2rem; width: 24rem;" placeholder="Enter Buying Link" required>
        </div>
		 <div>
            <label for="course_image">Select Image:</label><br>
            <input type="file" id="course_image" name="course_image" style="margin-top:2rem; width: 24rem;" accept="image/*">
        </div>
        <div>
            <button type="submit" style="width: 9rem;
    border: 0px;
    background-color: #000;
    color: #fff;
    margin: 2rem;">Submit</button>
        </div>
    </form>
</center>


<!--------------------------->

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
