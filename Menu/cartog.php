<?php
    session_start();
    $con = mysqli_connect('localhost','root','bhavna','product_details');

    if(isset($_POST["add_to_cart"])){
        if (isset($_SESSION["shopping_cart"])) {
           $item_array_id = array_column($_SESSION["shopping_cart"],"item_id");
           if (!in_array($_GET["id"], $item_array_id)) {
               $count = count($_SESSION["shopping_cart"]);
               $item_array = array(
                'item_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
           } else {
               echo '<script>alert("Item Already Added")</script>';
               echo '<script>window.location="cart.php"</script>';
           }
           
        } else {
            $item_array = array(
                'item_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"]
            );
            $_SESSION["shopping_cart"][0] = $item_array;
        }
        
    }

    if(isset($_GET["action"])){
        if($_GET["action"] == "delete"){
            foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                if($values["item_id"] == $_GET["id"]){
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<script>alert("Item Removed")</script>';
                    echo '<script>window.location="cart.php"</script>';
                }
            }
        }
    }

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
    <style>
        .cardSet1{
            background-color: rgb(144, 255, 159);
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container padding">
        <?php
            $query = "SELECT * FROM veg ORDER BY id ASC";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0){
                echo '<div class="card-deck">';
                while($row = mysqli_fetch_array($result)){
            ?>
                <div class="col-md-4">
                    <form method="POST" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
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

        <div style="clear: both;"></div>
        <br>
        <h3>Order Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
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
                                <td><?php echo $values["item_name"]; ?></td>
                                <td><?php echo $values["item_quantity"]; ?></td>
                                <td>₹ <?php echo $values["item_price"]; ?></td>
                                <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                                <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                            </tr>
                <?php
                            $total = $total + ($values["item_quantity"] * $values["item_price"]);
                        }
                ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <td align="right">₹ <?php echo number_format($total,2); ?></td>
                            <td></td>
                        </tr>

                <?php
                    }
                ?>
            </table>
        </div>


    </div>
</body>
</html>