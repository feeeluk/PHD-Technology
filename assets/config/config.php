<?php

    // Absolute server path for includes
    $root = $_SERVER['DOCUMENT_ROOT'];

    // Web root for URLs
    $path = "/";

    // Detect environment (test vs live)
    $host = $_SERVER['HTTP_HOST'];
    $is_live = ($host === "www.pdhtechnology.com");
    $is_test = !$is_live;

    // Default metadata (pages can override these)
    $default_title = "PDH Technology";
    $default_description = "Digital and technology services for businesses.";
    $default_keywords = "Business Analysis, Software Development, Data, Digital Projects";

?>
