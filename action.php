<?php

    $name = htmlentities(strip_tags(addslashes(trim($_POST['name']))));
    $email = htmlentities(strip_tags(addslashes(trim($_POST['email']))));
    $company = htmlentities(strip_tags(addslashes(trim($_POST['company']))));
    $message = htmlentities(strip_tags(addslashes(trim($_POST['message']))));
    $country = htmlentities(strip_tags(addslashes(trim($_POST['country']))));

    $toEmail = "profchydon@gmail.com";
    $mailHeaders = "From: " . $name . "<". $email .">\r\n";
    if(mail($toEmail, "${name}", $message, $mailHeaders)) {
        return $message = "Your contact information is received successfully.";
        $type = "success";
    }

    // function submit($name, $email, $company, $message, $country) {
    //     $dsn = 'mysql:host=localhost;dbname=chrio';
    //     return $pdo = new PDO($dsn, 'root', '');
    //     $query = $pdo->prepare('INSERT into contact (name, email, company, message, country) values (:name, :email, :company, :message, :country)');
    //     $query->bindParam(':name' , $name);
    //     $query->bindParam(':email' , $email);
    //     $query->bindParam(':company' , $company);
    //     $query->bindParam(':message' , $message);
    //     $query->bindParam(':country' , $country);
  
    //     if ($query->execute()) {
    //         return true;
    //     }
    //     else {
    //         return false;
    //     }
  
    // }

    // $name = htmlentities(strip_tags(addslashes(trim($_POST['name']))));
    // $email = htmlentities(strip_tags(addslashes(trim($_POST['email']))));
    // $company = htmlentities(strip_tags(addslashes(trim($_POST['company']))));
    // $message = htmlentities(strip_tags(addslashes(trim($_POST['message']))));
    // $country = htmlentities(strip_tags(addslashes(trim($_POST['country']))));

    // $save = submit($name, $email, $company, $message, $country);
    
    // return $save;

    // if (submit($name, $email, $company, $message, $country)) {
        
    //     echo "Thank you for contacting Chrio Creative Studios. We will reach out to you as soon shortly";

    // }


 ?>