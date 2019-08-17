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
    <style>
        .cardSet1{
            background-color: rgb(144, 255, 159);
        }
        .cardSet2{
            background-color: rgb(252, 162, 162);
        }
        .cardSet3{
            background-color: rgb(144, 229, 255);
        }
        .cardSet4{
            background-color: rgb(255, 194, 144);
        }
        .cardSet5{
            background-color: rgb(255, 184, 234);
        }
        .cardSet6{
            background-color: rgb(255, 219, 219);
        }
    </style>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Aboutus/aboutus.php">About Us</a>
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
                                <a class="dropdown-item" href="../index.php?logout='1'" style="color:red;">Logout</a>
                                <?php
                            } else {?>
                                <a class="dropdown-item" href="../Newlogin/login.php">Login/Signup</a>
                                <?php
                            }
                            ?>
                            <a class="dropdown-item" href="checkout.php">Your Cart</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Welcome-->
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Our Delicious Menu</h1>
            </div>
            <hr>
        </div>
    </div>

    <div class="container">
        <div class="card-deck">
            <div class="card cardSet1">
                <img class="card-img-top" src="Veg/Veg_Extravaganz.jpg" alt="Veg">
                <div class="card-body">
                    <h3 class="card-title">VEG PIZZA</h3>
                    <p class="card-text">A delight for veggie lovers! Choose from our wide range of delicious
                        vegetarian pizzas, it's softer and tastier</p>
                </div>
                <div class="card-footer">
                    <a href="veg.php" class="btn btn-primary">View All</a>
                </div>
            </div>
            <div class="card cardSet2">
                <img class="card-img-top" src="NonVeg/Chicken_Golden_Delight.jpg" alt="Non Veg">
                <div class="card-body">
                    <h3 class="card-title">NON-VEG PIZZA</h3>
                    <p class="card-text">Choose your favourite non-veg pizzas from the Domino's Pizza menu. Get fresh
                        non-veg pizza with your choice of crusts & toppings</p>
                </div>
                <div class="card-footer">
                    <a href="nonveg.php" class="btn btn-primary">View All</a>
                </div>
            </div>
            <div class="card cardSet3">
                <img class="card-img-top" src="PizzaMania/onion_veg.jpg" alt="Pizza Mania">
                <div class="card-body">
                    <h3 class="card-title">PIZZA MANIA</h3>
                    <p class="card-text">Indulge into mouth-watering taste of Pizza mania range, perfect answer to all
                        your food cravings</p>
                </div>
                <div class="card-footer">
                    <a href="pizzamania.php" class="btn btn-primary">View All</a>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <div class="container">
        <div class="card-deck">
            <div class="card cardSet4">
                <img class="card-img-top" src="BurgerPizza/vegprime.jpg" alt="Burger Pizza">
                <div class="card-body">
                    <h3 class="card-title">BURGER PIZZA</h3>
                    <p class="card-text">Looks like a burger tastes like a pizza. Fresh veggies with the goodness of
                        wheat, baked to perfection</p>
                </div>
                <div class="card-footer">
                    <a href="burger.php" class="btn btn-primary">View All</a>
                </div>
            </div>
            <div class="card cardSet5">
                <img class="card-img-top" src="Sides/046015 garlic bread_1346075642.jpg" alt="Sides & Beverages">
                <div class="card-body">
                    <h3 class="card-title">SIDES & BEVERAGES</h3>
                    <p class="card-text">Complement your pizza with wide range of sides & beverages available at
                        Domino's Pizza India</p>
                </div>
                <div class="card-footer">
                    <a href="sides.php" class="btn btn-primary">View All</a>
                </div>
            </div>
            <div class="card cardSet6">
                <img class="card-img-top" src="SpecialChicken/Boneless-Chicken-wings-192x192.png" alt="Specialty Chicken"
                    style="height: 266px;">
                <div class="card-body">
                    <h3 class="card-title">SPECIALTY CHICKEN</h3>
                    <p class="card-text">Tender, juicy, melt-in-mouth, a whole new range of drool-worthy boneless
                        chicken and chicken wings that are tossed in exotic, international flavours</p>
                </div>
                <div class="card-footer">
                    <a href="specialchicken.php" class="btn btn-primary">View All</a>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">


    <!--Parallax Peek-a-boo-->
    <figure>
        <div class="fixed-wrap">
            <div class="row parallax">
                <h1>Peek-a-Boo</h1>
            </div>
            <div id="fixed">
            </div>
        </div>
    </figure>
    <hr class="my-4">

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