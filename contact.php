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
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="courses.php">Courses</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contact.php">Contact Us</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
<!--------------------------->

<style>
.overlay {
    background-image:linear-gradient(to right, rgb(0 0 0 / 90%), rgb(93 106 255 / 90%));
    width: 100%;
    height: 100%;
    z-index: 1;
    position: relative;
    padding: 110px 0;
}
.section-bg {
    background-size: cover;
    position: relative;
    background-position: left;
    z-index: 0;
    padding: 0;
    min-height: auto;
    overflow: hidden;
}
.contact-form {
    position: relative;
    padding: 45px 0 45px 60px;
}

.contact-form:before {
    position: absolute;
    content: '';
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: 6px;
 
    box-shadow: 10px 40px 40px rgba(0,0,0,.2);
    pointer-events: none;
    right: auto;
    width: 100vw;
}
.particles-js-canvas-el {
    position: absolute;
    left: 0;
    top: 0;
    z-index: 1;
}
.contact-form input {
    border: 0;
    background: transparent;

    display: block;
    width: 100%;
    min-height: 50px;
    padding: 11px 0;
    font-size: 16px;
    font-weight: 600;
    line-height: 27px;

    background-color: transparent;
    background-image: none;
    border-radius: 0;
    -webkit-appearance: none;
    transition: .3s ease-in-out;
    border: 2px solid transparent;
    border-bottom-color: rgba(0,0,0,.1);
}

.contact-form textarea {
    border: 0;
    background: transparent;
    display: block;
    width: 100%;
    min-height: 50px;
    padding: 11px 0;
    font-size: 16px;
    font-weight: 600;
    line-height: 27px;

    background-color: transparent;
    background-image: none;
    border-radius: 0;
    -webkit-appearance: none;
    transition: .3s ease-in-out;
    border: 2px solid transparent;
    border-bottom-color: rgba(0,0,0,.1);
}
.contact-form input::placeholder {
  color:#222;
}
.contact-form textarea::placeholder {
  color:#222;

}
.contact-form input {
    margin-bottom: 30px;
    font-size: 16px;
    font-weight: 600;
    height: 55px;
}
.contact-form input:hover, .contact-form input:focus{
    outline: none;
    box-shadow: none;
    background: transparent;
    border: 2px solid transparent;
    border-bottom-color: rgb(254, 132, 111);

}
.contact-form textarea:hover, .contact-form textarea:focus{
  background: transparent; 
    outline: none;
  box-shadow: none;
     border: 2px solid transparent;
    border-bottom-color: rgb(254, 132, 111);

}


.taso-btn {
    background-color: #fff;
    margin: 25px 0;
    color: #214dcb;
    -webkit-box-shadow: 0px 10px 30px 0px rgba(255, 255, 255, 0.32);
    box-shadow: 0px 10px 30px 0px rgba(255, 255, 255, 0.17);
}
.contact-info {
    padding: 0 30px 0px 0;
}

h2.contact-title {
    font-size: 35px;
    font-weight: 600;
    color: #fff;
    margin-bottom: 30px;
}

.contact-info p {
    color: #ececec;
}

ul.contact-info {
    margin-top: 30px;
}

ul.contact-info li {
    margin-bottom: 22px;
}



ul.contact-info span {
    font-size: 20px;
    line-height: 26px;
}
ul.contact-info li {
    display: flex;
    width: 100%;
}

.info-left {
    width: 10%;
}

.info-left i {
    width: 30px;
    height: 30px;
    line-height: 30px;
    font-size: 30px;
    color: #ffffff;
}

.info-right h4 {
    color: #fff;
    font-size: 18px;
}
.contact-page .info-left i{
color: #FE846F;
}
.btn {
display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    font-family: 'Poppins', sans-serif;
    padding: 10px 30px 10px;
    font-size: 17px;
    line-height: 28px;
    border: 0px;
    border-radius: 10px;
    -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
.btn-big {
    color: #ffffff;
    -webkit-box-shadow: 0px 5px 20px 0px rgba(45, 45, 45, 0.47843137254901963);
    box-shadow: 2px 5px 10px 0px rgba(45, 45, 45, 0.19);
    color: #fff !important;
    margin-right: 20px;
    background: #FE846F;
    transition: .2s;
    border: 2px solid #FE846F;
    margin-top: 50px;
}

@media only screen and (max-width: 767px) {
.contact-form {
    padding: 30px;
}
.contact-form:before {
    width: 100%;
}

}
</style>
<section class="section-bg" style="background-image: url(https://i.ibb.co/9p3Cnk9/slider-2.jpg);"  data-scroll-index="7">
          <div class="overlay pt-100 pb-100 ">
            <div class="container">
               <div class="row">
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="contact-info">

                            <h2 class="contact-title">Have Any Questions?</h2>
                            <p>If you require any assistance or have any questions, please take a moment to fill out this form. I am dedicated to resolving any issues you may encounter and providing the support you need</p>
                            <ul class="contact-info">
                                <li>
                                  <div class="info-left">
                                      <i class="fas fa-mobile-alt"></i>
                                  </div>
                                  <div class="info-right">
                                      <h4>+918449***21</h4>
                                  </div>
                                </li>
                                <li>
                                  <div class="info-left">
                                      <i class="fas fa-at"></i>
                                  </div>
                                  <div class="info-right">
                                      <h4>rajputsingh4433@gmail.com</h4>
                                  </div>
                                </li>
                                <li>
                                  <div class="info-left">
                                      <i class="fas fa-map-marker-alt"></i>
                                  </div>
                                  <div class="info-right">
                                      <h4>Address</h4>
                                  </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                            <div class="contact-form">
							
							<?php
if(isset($_POST["name"])==true && isset($_POST["email"])==true && isset($_POST["message"])==true){
$name=$_POST["name"];
$email=$_POST["email"];
$msg=$_POST["message"];
$sqls="INSERT INTO `contact`(`id`, `name`, `email`, `message`) VALUES ('NULL','$name','$email','$msg')";
$res=mysqli_query($conn,$sqls);
if($res==true){
	echo "<h2>Thank You For Contact Us</h2>";
}else{
	echo "Something is wrong";
}
}
?>
							
                                        <!--Contact Form-->
                                        <form id='contact-form' action="contact.php" method='POST'><input type='hidden' name='form-name' value='contactForm' />
                                            <div class="row">
                                               <div class="col-md-12">
                                                  <div class="form-group">
                                                     <input type="text" name="name" class="form-control" id="first-name" placeholder="Enter Your Name *" required="required">
                                                  </div>
                                               </div>
                                               <div class="col-md-12">
                                                  <div class="form-group">
                                                     <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email *" required="required">
                                                  </div>
                                               </div>

                                               <div class="col-md-12">
                                                  <div class="form-group">
                                                       <textarea rows="4" name="message" class="form-control" id="description" placeholder="Enter Your Message *" required="required"></textarea>
                                                  </div>
                                               </div>
                                                <div class="col-md-12">
                                                    <!--contact button-->
                                                    <button  class="btn-big btn btn-bg">
                                                        Send Us <i class="fas fa-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                    </div>
               </div>
           </div>
              </div>
        </section>

<footer>
    <div class="container" >
        <p>&copy; 2024 MasterClass Marketplace. All rights reserved.</p>
    </div>
</footer>
		
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
