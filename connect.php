<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $name = $_POST["fullname"];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "olamideibikunle85@gmail.com";
    $headers = "From: $email";

    if(mail($to, $subject, $message, $headers)){
        echo "Email Sent";
    }else{
        echo "Email sending failed";
    }
    
    
}





?>