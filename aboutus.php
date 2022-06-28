<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn= mysqli_connect($server,$username,$password, $database);


if(isset($_POST["submitButton"]))
{
    $email=$_POST["email"];


    $insertdata= mysqli_query($conn, "INSERT INTO subscribers(email)VALUES('$email')");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style2.css"/>
    <title>About us</title>
</head>
<body>
   <?php include ('navbar.php') ?>
    <main class="p-5">
            <h1>About Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate ut incidunt ipsam tenetur, ad magni esse possimus alias. Mollitia sint dignissimos, excepturi eos doloremque assumenda quos cum nobis. Perspiciatis autem enim adipisci quae, fuga ratione possimus animi mollitia harum illum optio sequi eaque corporis rerum recusandae vitae quidem aliquid ab?</p>
    </main>
    <div class="container">
        <div class="content pt-2">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Our program</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste, quos corporis soluta minima fugiat consectetur saepe blanditiis non  consequuntur. Sit aliquam ad accusamus facere, rerum laudantium consequuntur maxime dolorem tempore laboriosam recusandae voluptatibus quod unde tenetur dolores officiis quas! Voluptate temporibus dolor architecto exercitationem illum, consequuntur aperiam minus necessitatibus tenetur.</p>
                </div>
                <div class="col-lg-6">
                    <img class="forest" src="images/eberhard-grossgasteiger-6DIOws7bowA-unsplash.jpg" alt="forest"/>
                </div>
            </div>
        </div>
        <div class="row p-5 ">
            <div class="col-lg-4 rounded-2">
                <h3>Skill Discovery</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <button class="btn btn-primary">View Details</button>
            </div>
           <div class="col-lg-4 rounded-2">
                <h3>Upskilling Program</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Quia saepe quisquam iure optio 
                eos amet dignissimos, vero sed hic et.</p>
                <button class="btn btn-primary">View Details</button>
            </div>
             <div class="col-lg-4 rounded-2">
                <h3>Path finding Program</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Quia saepe quisquam iure optio 
                eos amet dignissimos, vero sed hic et.</p>
                <button class="btn btn-primary">View Details</button>
             </div>
        </div>
        <form action="aboutus.php" method="POST">
            <div class="row">
                <p class="text-center">Subscribe to get more,latest news about Zalego Academy</p>
                <div class="col-lg-6">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" id="email" class="form-control" placeholder="Enter your email address" name="email">
                </div>
                <div class="col-lg-6 mt-3">
                    <button class="btn btn-primary mt-3" type="submit" name="submitButton">Submit</button>
                </div>
            </div>
            
            
        </form>
        <hr>
        &COPY;company 2022
    
    </div>
        


  





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js" ></script>
    
</body>
</html>