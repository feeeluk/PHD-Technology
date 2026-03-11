<?php

    // Basic validation
    if (!isset($_POST['name'], $_POST['email'], $_POST['telephone'], $_POST['message'])) {
        header("Location: contact.php?status=error");
        exit;
    }

    // Get form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $telephone = trim($_POST['telephone']);
    $message = trim($_POST['message']);

    // Simple sanitisation
    $name = htmlspecialchars($name, ENT_QUOTES);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $telephone = htmlspecialchars($telephone, ENT_QUOTES);
    $message = htmlspecialchars($message, ENT_QUOTES);

    // Build email
    $to = "test@example.com";

    $subject = "Contact Form Submission";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Telephone: $telephone\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: philiphenning@outlook.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    $sent = mail($to, $subject, $body, $headers);

    // Redirect based on result - return to the same page, but with information in the URL
    if ($sent) {
        header("Location: /pages/contact.php?status=success");
    } else {
        header("Location: /pages/contact.php?status=error");
    }
    exit;

?>