<?php include('process.php')   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <title>Bootstrap Gridlayout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- start of navigation -->

    <?php include ('navbar.php') ?>
    <!-- End navigation bar -->
    <main class="p-5 mb-4 bg-light rounded-2 ">
        <h1>Welcome, Chris </h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis totam, debitis repudiandae minus voluptate amet fugiat repellat dolores doloremque illo vitae harum accusamus commodi consequuntur aperiam quas, laborum officiis, maxime incidunt cum temporibus soluta expedita?
        </p>
        <button class="btn btn-primary">Learn More</button>
    </main>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1>Header 1</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In impedit hic nulla incidunt neque, eum non illo tempore sed,
                     dolores voluptatibus harum. Magni, dolore rerum?
                </p>
                <button class="btn btn-primary">Leran more</button>
            </div>

            <div class="col-lg-4">
                <h1>Header 2</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In impedit hic nulla incidunt neque, eum non illo tempore sed,
                     dolores voluptatibus harum. Magni, dolore rerum?
                </p>
                <button class="btn btn-primary">Leran more</button>
            </div>
            <div class="col-lg-4">
                <h1>Header 3</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In impedit hic nulla incidunt neque, eum non illo tempore sed,
                     dolores voluptatibus harum. Magni, dolore rerum?
                </p>
                <button class="btn btn-primary">Leran more</button>
            </div>
        </div>

        <!-- contact us page here -->
        <div class="row pt-5">
            <h1>Contact Us</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita soluta officiis dolorem unde, numquam aspernatur sequi inventore nemo temporibus sapiente.
            </p>
            <form action="index.php" method="POST">
                <?php
                    if($response)
                    {
                        include('response.php');
                    }

                ?>
                    
                

                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" placeholder="Enter your name">
                    </div>
    
                    <div class="mb-3 col-lg-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Enter your Last name">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="phoneNumber" class="form-label">First Name</label>
                        <input type="tel" class="form-control" name="phonenumber" placeholder="Enter your Phone number" required>
                    </div>
    
                    <div class="mb-3 col-lg-6">
                        <label for="Email" class="form-label">Last Name</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your Email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="message" class="form-label">Message</label>
                        <textarea cols="30" rows="10" class="form-control" name="message"></textarea>
                    </div>
                    

                </div>
                <button type="submit" class="btn btn-primary mt-5" name="submitbutton">Send A message</button>
               
            </form>
        </div>


        <!-- End contact us page  -->
    </div>
    <hr>
    <footer>
        &copy; Caliptos 2022
    </footer>
    





    
    <!--script src="/bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>