<?php include('../server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Engineers Gone Hungry</title>
</head>

<body>
    <!--Nav Bar-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Engineers Gone Hungry</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Menu/menu.php">Menu</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contact/contact.php">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">

                            <?php
                            if (isset($_SESSION['username'])) {
                                echo 'Welcome ,<strong> ' . $_SESSION["username"] . '</strong>';
                            } else {
                                echo 'Account';
                            } ?>

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php if (isset($_SESSION['username'])) {
                                ?>
                            <a class="dropdown-item" href="index.php?logout='1'" style="color:red;">Logout</a>
                            <?php
                            } else {?>
                            <a class="dropdown-item" href="Newlogin/login.php">Login/Signup</a>
                            <?php
                            }
                            ?>


                            <a class="dropdown-item" href="Menu/checkout.php">Your Cart</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <hr class="my-4">

    <!--Parallax Peek-a-boo-->
    <figure>
        <div class="fixed-wrap">
            <div class="row parallax">
                <h1>About Us</h1>
            </div>
            <div id="fixed">
            </div>
        </div>
    </figure>
    <hr class="my-4">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 text-center">
                <h3>WHAT WE’RE ABOUT</h3>
            </div>
            <div class="col-sm-8">
                <p>Here, we don’t just make pizza. We make people happy. We built this belief that pizza night should
                    be special, and we carry that belief into everything we do. With more than 55 years of experience
                    under our belts, we understand how to best serve our customers through tried and true service
                    principles: We create food we’re proud to serve and deliver it fast, with a smile.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 text-center">
                <h3>WHO WE ARE</h3>
            </div>
            <div class="col-sm-8">
                <p>There’s nothing cookie-cutter about Pizza. Not our pizzas. Not our people. And definitely not the
                    way we live life. Around here, we don’t settle for anything less than food we’re proud to serve.
                    And we don’t just clock in. Not when we can also become our best, make friends, and have fun while
                    we’re at it. We’re the pizza company that lives life unboxed.</p>
            </div>
        </div>
    </div>

    <hr class="my-4">
    <!--3 Column-->
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <a href="../Menu/menu.php">
                    <i class="fas fa-bars"></i></a>
                <h3>OUR MENU</h3>
                <p>Explore our range of delicious Pizzas</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <a href="../contact/contact.php">
                    <i class="fas fa-birthday-cake"></i></a>
                <h3>BIRTHDAY PARTY</h3>
                <p>Celebrate joy of birthday with Fresh & Hot Pizzas</p>
            </div>
            <div class="col-sm-12 col-md-4">
                <a href="../contact/contact.php">
                    <i class="fas fa-home"></i></a>
                <h3>Catering</h3>
                <p>Live Kitchen for weddings/corporate events</p>
            </div>
        </div>
    </div>

    <hr class="my-4">
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Meet Our Developers</h1>
            </div>
            <hr>
            <div class="col-12">
                <p class="lead">We are 74.87% Engineers</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card-deck">
            <div class="card" style="background-color: rgb(245, 156, 155)">
                <img class="card-img-top" src="dhruv.jpg" alt="Dhruv Parmar">
                <div class="card-body">
                    <h5 class="card-title">Dhruv Parmar</h5>
                    <p class="card-text">almost IT engineer</p>
                    <p class="card-text" style="font-size: 90%;">"I don't care what anyone thinks of me. Except dogs. I
                        want dogs to like me."</p>
                </div>
            </div>
            <div class="card" style="background-color: rgb(134, 190, 214)">
                <img class="card-img-top" src="parth.jpg" alt="Parth Samant">
                <div class="card-body">
                    <h5 class="card-title">Parth Samant</h5>
                    <p class="card-text">almost IT engineer</p>
                    <p class="card-text" style="font-size: 90%;">"Life is tough, but it's even tougher if you're
                        stupid."</p>
                </div>
            </div>
            <div class="card" style="background-color: rgb(241, 214, 160)">
                <img class="card-img-top" src="rahool.jpg" alt="Rahool Rangnekar">
                <div class="card-body">
                    <h5 class="card-title">Rahool Rangnekar</h5>
                    <p class="card-text">almost IT engineer</p>
                    <p class="card-text" style="font-size: 90%;">"If idiots could fly, this place would be an airport."</p>
                </div>
            </div>
        </div>
    </div>


    <hr class="my-4">
    <!--Connect with us-->
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-12">
                <h2>Connect with Us</h2>
            </div>
            <div class="col-12 social padding">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
            </div>
        </div>

    </div>

    <!--Footer-->
    <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <h4>Engineers Gone Hungry</h4>
                    <hr class="light">
                    <p>+91 9619509949</p>
                    <p>+91 9167913191</p>
                    <p>engineersgonehungry@gmail.com</p>
                    <p>Next to Atharva College of Enginnering</p>
                    <p>Mumbai, Maharashtra, 400046</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h4>Our Hours</h4>
                    <hr class="light">
                    <p>Weekdays: 9am - 11pm</p>
                    <p>Weekdays: 10am - 12pm</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h4>Outlets</h4>
                    <hr class="light">
                    <p>Borivali(W), Malad(W), Miraroad(E)</p>
                    <p>Kandivali(W), Goregoan(E), Andheri(W)</p>
                </div>
                <div class="col-12">
                    <hr class="light-last">
                    <h5>&copy; www.engineersgonehungry.com</h5>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>