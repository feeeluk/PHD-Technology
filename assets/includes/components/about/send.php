<?php

    $to = "philiphenning@outlook.com";
    $subject = "Contact Form Submission";

    $message = "Name: " . $_POST['name'] . "\n" .
            "Email: " . $_POST['email'] . "\n" .
            "Telephone: " . $_POST['telephone'] . "\n" .
            "Message:\n" . $_POST['message'];

    $headers = "From: philiphenning@outlook.com";

    mail($to, $subject, $message, $headers);

?>