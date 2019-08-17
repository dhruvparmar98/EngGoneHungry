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
    <div class="container-fluid">
        <div class="col-12">
                <div class="text-center menuclass">
                    <a href="veg.php">Veg</a>
                    <a href="nonveg.php">Non Veg</a>
                    <a href="pizzamania.php">Pizza Mania</a>
                    <a href="burger.php">Burger Pizza</a>
                    <a href="sides.php">Sides & Beverages</a>
                    <a href="specialchicken.php">Special Chicken</a>
                </div>
            </div>
    </div>


    <hr class="my-4">
    <figure>
        <div class="fixed-wrap">
            <div class="row parallax text-center">
                <h1>Veg Pizzas</h1>
            </div>
            <div id="fixed">
            </div>
        </div>
    </figure>
    <hr class="my-4">

    <div class="container padding">
        <?php
            $query = "SELECT * FROM veg ORDER BY id ASC";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0){
                echo '<div class="card-deck">';
                while($row = mysqli_fetch_array($result)){
            ?>
                <div class="col-md-4">
                    <form method="POST" action="veg.php?action=add&id=<?php echo $row["id"]; ?>" onsubmit = "alert('Item Added')">
                        <div class="card cardSet1">
                            <img class="card-img-top" src="<?php echo $row["image"]; ?>">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $row["pname"]; ?></h3>
                                <p class="card-text">₹ <?php echo $row["price"]; ?></p>
                                <input type="text" name="quantity" class="form-control" value=1>
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                            </div>
                        </div>
                    </form>
                </div> 
            <?php
                }
            ?>
            </div>
            <?php
            }
        ?>


    </div>

    <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <h4>Engineers Gone Hungry</h4>
                    <hr class="light">
                    <p>9619509949</p>
                    <p>email@email.com</p>
                    <p>B-203 Savaliya</p>
                    <p>City, State, 0000000</p>
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