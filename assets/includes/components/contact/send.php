<?php

    // -------------------------
    // Collect raw form data
    // -------------------------
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $telephone = trim($_POST['telephone'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // -------------------------
    // Validate the data
    // -------------------------
    $errors = [];

    // Name validation
    if ($name === '') {
        $errors['name'] = "** Please enter your name **";
    } elseif (strlen($name) < 3) {
        $errors['name'] = "** Your name must be at least 3 characters **";
    }

    // Email validation
    if ($email === '') {
        $errors['email'] = "** Please enter your email address **";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "** Please enter a valid email address **";
    }

    // Telephone validation
    if ($telephone === '') {
        $errors['telephone'] = "** Please enter your telephone number **";
    } elseif (!preg_match('/^[0-9 +()-]{11,13}$/', $telephone)) {
        $errors['telephone'] = "** Please enter a valid telephone number **";
    }

    // Message validation
    if ($message === '') {
        $errors['message'] = "** Please enter a message **";
    } elseif (strlen($message) < 10) {
        $errors['message'] = "** Your message must be at least 10 characters **";
    }

    // If there are validation errors, redirect back with the relevant errors and the relevant completed fields
    if (
        isset($errors['name']) ||
        isset($errors['email']) ||
        isset($errors['telephone']) ||
        isset($errors['message'])
    ){
        $data = [
            'name'      => $name,
            'email'     => $email,
            'telephone' => $telephone,
            'message'   => $message
        ];

        $errorString = urlencode(json_encode($errors));
        $dataString  = urlencode(json_encode($data));

        header("Location: /pages/contact.php?status=validation_error&errors={$errorString}&data={$dataString}");
        exit;
    }

    // -------------------------
    // Sanitise after validation
    // -------------------------
    $name = htmlspecialchars($name, ENT_QUOTES);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $telephone = htmlspecialchars($telephone, ENT_QUOTES);
    $message = htmlspecialchars($message, ENT_QUOTES);

    // -------------------------
    // Build email
    // -------------------------
    $to = "test@example.com";
    $subject = "Contact Form Submission";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Telephone: $telephone\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: philiphenning@outlook.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // -------------------------
    // Send email
    // -------------------------
    $sent = mail($to, $subject, $body, $headers);

    // -------------------------
    // Redirect based on result
    // -------------------------
    if ($sent) {
        header("Location: /pages/contact.php?status=success");
    } else {
        // Build data array to repopulate the form
    $data = [
        'name'      => $name,
        'email'     => $email,
        'telephone' => $telephone,
        'message'   => $message
    ];

    $errorString = urlencode(json_encode($errors));
    $dataString  = urlencode(json_encode($data));

    header("Location: /pages/contact.php?status=error&errors={$errorString}&data={$dataString}");
}

exit;

?>
