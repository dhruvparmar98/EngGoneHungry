<?php 
    session_start();

    $username="";
    $email = "";
    $errors = array();
    
    //connection
    $db = mysqli_connect('localhost','root','bhavna','registration');

    //if register is clicked
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password_1 = $_POST['password_1'];
        $password_2 = $_POST['password_2'];

        //check for form feilds
        if(empty($username)){
            array_push($errors, "Username is Required");
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)|| empty($email)){
            array_push($errors, "Email is Invalid");
        }
        if(empty($password_1)){
            array_push($errors, "Password is Required");
        }
        if($password_1 != $password_2){
            array_push($errors, "Both Passwords do not match");
        }

        //if no error
        if(count($errors)==0){
            $password = md5($password_1); //encrypt password
            $sql = "INSERT INTO users (username, email, password) values ('$username','$email','$password')";
            mysqli_query($db, $sql);
            $_SESSION['username'] = $username;
            //$_SESSION['success'] = "You are now logged in";
            header('location: ../index.php');
        }
    }


    //login from login page
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        //check for form feilds
        if(empty($username)){
            array_push($errors, "Username is Required");
        }
        if(empty($password)){
            array_push($errors, "Password is Required");
        }
        if(count($errors)==0){
            $password = md5($password); //encrypt before comparing from db
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($db, $query);

            if(mysqli_num_rows($result) == 1){
                // log user in
                $_SESSION['username'] = $username;
                //$_SESSION['success'] = "You are now logged in";
                header('location: ../index.php');
            }
            else{
                array_push($errors, "wrong username/password combination");
            }
        }
    }


    //logout
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: index.php');
    }




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
                    //echo '<script>window.location="veg.php"</script>';
                }
            }
        }
    }

?>