<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn= mysqli_connect($server,$username,$password, $database);

if(isset($_POST["Submitbutton"]))
{
    $fullname=$_POST["fullname"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $course=$_POST["course"];

    $insert=mysqli_query($conn, "INSERT INTO enrollment(fullname, phonenumber, email, gender, course) VALUES('$fullname', '$phone', '$email', '$gender', '$course')");
}

?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style3.css">
    <title>ENROLL TO JULY INTAKE</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">

        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link active">Home</a>
                    <a href="aboutus.php" class="nav-link active">About us</a>
                    <a href="enroll.php" class="btn btn-primary active">Register now </a>
                </div>
            </div>
        </div>
    </nav>



  <main class="text-center p-5 mb-4">
    <h2>
        JULY SOFTWARE ENGINEERING BOOTCAMP
    </h2>
    <ul style="list-style-type:none ;" >
        <li>
                <span><i class="fa fa-calendar"></i></span>
                <span>20th July 2022</span>
        </li>
        <li>
            <span>
               <i class="fa fa-map-marker"></i>
            </span>
            <span>Zalego Academy,<br>Devan Plaza</span>

        </li>
    </ul>
  </main>  

  <div class="row">
    <div class="col-lg-12 text-center">
        <p>Looking for a place to kickstart your career in technology? Whether you're a local, new in town or just cruising through we've got loads of great tips and events for you</p>
    </div>
  </div>

  <div class="container shadow">
        <div class="sign-up-card">
            <h3 class="text-center p-5">Sign up today?</h3>
            <form action="enroll.php" method="POST">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="full name" class="form-label"><b>Full Name:</b></label>
                        <input type="text" class="form-control" id="full name" placeholder="Enter your full name" name="fullname">
                    </div>
                    <div class="col-lg-6">
                        <label for="phone" class="form-label"><b>Phone number:</b></label>
                        <input type="tel" class="form-control" id="phone" placeholder="+2547...." name="phone">
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-lg-6">
                        <label for="email" class="form-label"><b>Email address:</b></label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
                    </div>
                    <div class="col-lg-6">
                        <label for="gender" class="form-label"><b>What is your gender:</b></label>
                        <select class="form-select" aria-label="Default select example" name="gender">
                            <option selected>--select your gender--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select> 
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                       <p>In order to complete your information to the bootcamp, you are required to select one course you will be<br>undertaking. Please NOTE that this will be your learning track during the 2-weeks immersion.</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="course" class="form-label"><b>What is your preffered course ?</b></label>
                        <select class="form-select" aria-label="Default select example" name="course">
                            <option selected>--Select your course--</option>
                            <option value="Web development">Web development</option>
                            <option value="Cyber security">Cyber security</option>
                        </select>
                    </div>
                
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <p>You agrre by providing your information you understand all our data privacy an protection policy<br>outlined in our Terms$ condition and the Privacy Policy statements.</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox"><b>Agree terms and condition</b></label>
                        
                    </div>
                </div>
                <br>
                <button type="submit" name="Submitbutton" class="btn btn-primary mb-3">submit application</button> 
            </form>
        </div>

  </div>

  <p class="text-center pt-5">Subscribe to get information, latest news about<br>Zalego Academy</p>
  <br>
    <div class="container">

        <form>
            <div class="row">
                <div class="col-lg-6 pl-8">
                    <input type="email" id="email" name="email1" class="form-control" placeholder="Enter your email address">
                </div>
                <div class="col-lg-6">
                    <button class="btn btn-primary">Subscribe</button>
                </div>
            </div>
            
        </form>
  </div>

  <hr>

  &COPY;COMPANY 2022









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js" ></script>
</body>
</html>