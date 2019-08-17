<?php include('../server.php');
    if(isset($_SESSION["username"])){
        $user=$_SESSION["username"];
      }else{
        $user=0;
      } 
      $final=0;

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

        .darkcolor{
            background-color: #343A40;
            color: white;
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

    <div class="container">
        <div style="clear: both;"></div>
        <br>
        <h3>Order Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr class="darkcolor">
                    <th width="40%">Item Name</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price</th>
                    <th width="15%">Total</th>
                    <th width="5%">Action</th>
                </tr>
                <?php
                    if(!empty($_SESSION["shopping_cart"])){
                        $total = 0;
                        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                ?>
                <tr>
                    <td>
                        <?php echo $values["item_name"]; ?>
                    </td>
                    <td>
                        <?php echo $values["item_quantity"]; ?>
                    </td>
                    <td>₹
                        <?php echo $values["item_price"]; ?>
                    </td>
                    <td>
                        <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?>
                    </td>
                    <td><a href="checkout.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span style="color: red; font-weight: 500">Remove</span></a></td>
                </tr>
                <?php
                            $total = $total + ($values["item_quantity"] * $values["item_price"]);
                            $final = $total;
                        }
                ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right">₹
                        <?php echo number_format($total,2); ?>
                    </td>
                    <td></td>
                </tr>

                <?php
                    }
                ?>
            </table>
        </div>       
        <input type="submit" class="btn btn-success subbtn" value="Proceed to Checkout" id="submit" onclick="validate_login()">
        <script type="text/javascript">
            function validate_login() {
                var total = "<?php echo $final; ?>";
                var user = "<?php echo $user; ?>";
                if (user == 0) {
                    alert("Please Login first!");
                    window.location = "../Newlogin/login.php"
                } else if (total == 0) {
                    alert("Your Shopping Bag is Empty!");
                } else {
                    window.location = "success.php"
                }
            }
        </script>
        <a href="menu.php" class="btn btn-info subbtn" role="button">Continue Shopping</a>
    </div>

    </div>
    
</body>

</html>