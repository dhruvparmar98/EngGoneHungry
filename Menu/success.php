<?php include('../server.php'); 

$con = mysqli_connect('localhost','root','bhavna','product_details');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="../style.css">
    <style>
        .cardSet1{
            background-color: rgb(144, 255, 159);
        }
    </style>
    <title>Document</title>
</head>

<body>
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


    <hr class="my-4">
    <figure>
        <div class="fixed-wrap">
            <div class="row parallax text-center">
                <h1>Order Placed!!!</h1>
            </div>
            <div id="fixed">
            </div>
        </div>
    </figure>
    <hr class="my-4">

    <div class="container-fluid padding text-center">
        <div class="col-12">
            <p class="lead">Congrats <span style="font-weight: 700;"><?php echo $_SESSION["username"]; ?></span> your order has been placed successfully and will be delivered shortly</p>
        </div>
    </div>
    
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