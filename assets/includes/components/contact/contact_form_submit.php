<?php
include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

    
    // -------------------------
    // Set variables for submit counter
    // -------------------------
    $attempt = isset($_POST['attempt']) ? (int)$_POST['attempt'] : 0;
    $attempt++;

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

        header("Location: " . $path ."pages/contact.php?status=validation_error&errors={$errorString}&data={$dataString}&attempt={$attempt}");
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
    $to = "hello@pdhtechnology.com";
    $subject = "Contact Form Submission";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Telephone: $telephone\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: hello@pdhtechnology.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // -------------------------
    // Send email via SMTP (PHPMailer) cont..
    // -------------------------
    require $root . '/phpmailer/src/Exception.php';
    require $root . '/phpmailer/src/PHPMailer.php';
    require $root . '/phpmailer/src/SMTP.php';

    $mail = new PHPMailer(true);
    $mail->isSMTP();

    try {

        if ($is_test) {
            // Local SMTP (Mailpit)
            $mail->Host       = $smtp_host;
            $mail->Port       = $smtp_port;
            $mail->SMTPAuth   = $smtp_auth;
            $mail->SMTPSecure = $smtp_secure;

        } else {
            // Live SMTP (IONOS)
            $mail->Host       = $smtp_host;
            $mail->SMTPAuth   = $smtp_auth;
            $mail->Username   = $smtp_user;
            $mail->Password   = $smtp_pass;
            $mail->SMTPSecure = $smtp_secure;
            $mail->Port       = $smtp_port;
        }

        // Sender & recipient
        $mail->setFrom('hello@pdhtechnology.com', 'PDH Technology');
        $mail->addAddress('hello@pdhtechnology.com');
        $mail->addReplyTo($email, $name);

        // Content
        $mail->Subject = 'Contact Form Submission';
        $mail->Body    =
            "Name: $name\n" .
            "Email: $email\n" .
            "Telephone: $telephone\n\n" .
            "Message:\n$message\n";

        $mail->send();

        // Success redirect
        header("Location: " . $path ."pages/contact.php?status=success");
        exit;

    } catch (Exception $e) {

        // Build data array to repopulate the form
        $data = [
            'name'      => $name,
            'email'     => $email,
            'telephone' => $telephone,
            'message'   => $message
        ];

        $errorString = urlencode(json_encode(['mail' => $mail->ErrorInfo]));
        $dataString  = urlencode(json_encode($data));

        header("Location: " . $path ."pages/contact.php?status=error&errors={$errorString}&data={$dataString}&attempt={$attempt}");
        exit;
    }

?>