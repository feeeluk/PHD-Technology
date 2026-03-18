<?php

    // Absolute server path for includes
    $root = $_SERVER['DOCUMENT_ROOT'];

    // Web root for URLs
    $path = "/";

    // Detect environment (test vs live)
    $host = $_SERVER['HTTP_HOST'];
    $is_live = ($host === "www.pdhtechnology.com");
    $is_test = !$is_live;

    // Environment-specific SMTP settings
    if ($is_live) {

        // Live SMTP (IONOS)
        $smtp_host = "smtp.ionos.co.uk";
        $smtp_user = "hello@pdhtechnology.com";
        $smtp_pass = "ionCcyh68@c3145327os";
        $smtp_port = 587;
        $smtp_secure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $smtp_auth = true;

    } else {

        // Test SMTP (Mailpit or similar)
        $smtp_host = "127.0.0.1"; // matters not if I use "127.0.0.1" or "localhost" as Mailpit listens on both.
        $smtp_user = "";
        $smtp_pass = "";
        $smtp_port = 1025;
        $smtp_secure = false;   // no encryption for Mailpit
        $smtp_auth = false;     // Mailpit doesn't require auth

    }

    // Default metadata (pages can override these)
    $default_title = "PDH Technology";
    $default_description = "Digital and technology services for businesses.";
    $default_keywords = "Business Analysis, Software Development, Data, Digital Projects";

?>
