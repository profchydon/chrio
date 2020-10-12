<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $country = $_POST['country'];
    $message = $_POST['message'];
    $formcontent="From: $name \n Message: $message";
    $recipient = "profchydon@gmail.com";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!";
?>