<?php include('../server.php');?>
<?php
    $result="";
    if(isset($_POST['submit'])){
        require 'phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;

        $mail ->Host = 'ssl://smtp.gmail.com';
        $mail ->Port = '587';
        $mail ->SMTPAuth=true;
        $mail ->SMTPSecure = 'tls';
        $mail ->Username='costumerental.customer@gmail.com';
        $mail ->Password='costume123';

        $mail ->setFrom($_POST['email'],$_POST['name']);
        $mail ->addAddress('costumerental.customer@gmail.com');

        $mail ->isHTML(true);
        $mail ->Subject=$_POST['subject'];
        $mail ->Body= '<h1 align=center>Name: '.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h1>';

        if(!$mail->send()){
            $result = "Something went wrong. Please try again";
        }
        else{
            $result = "Thanks ".$_POST['name']." for contacting us. We'll get back to you shortly";
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
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link rel="stylesheet" type="text/css" href="../style.css">

    <title>Contact</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="../Menu/menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Aboutus/aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.php">Contact</a>
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
                            <a class="dropdown-item" href="../Menu/checkout.php">Your Cart</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr class="my-4">
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-12">
                <h2>Write to us</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid padding contactbox">
        <h5 class="text-center"><?php echo $result; ?></h5>
        <form class="contact-form" action="contact.php" method="POST" >
            <input type="text" name="name" placeholder="Full Name">
            <input type="email" name="email" placeholder="Your e-mail">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Message" rows="4"></textarea>
            <button type="submit" name="submit" class="btn">Send Mail</button>
        </form>
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