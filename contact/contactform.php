<?php

/*if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "costumerental.customer@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Your have received mail from ".$name.".\n\n".$message;


    mail('costumerental.customer@gmail.com', $subject, $message, $headers);
}else{
    header('location: contact.php');
    exit(0);
}*/
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