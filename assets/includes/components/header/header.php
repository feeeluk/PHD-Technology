<?php

    // IMPORT SITE WIDE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        include($path."assets/includes/components/header/site_details.php"); 
        
?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" type="image/x-icon" href="/assets/images/favicon/favicon.ico">
        
        <!-- resets CSS -->
            <link rel="stylesheet" href="/assets/styles/reset.css"> 

        <!-- sets the look and feel -->
            <link rel="stylesheet" href="/assets/styles/variables.css">

        <!-- the core layouts and design (mobile first) -->
            <link rel="stylesheet" href="/assets/styles/layout_general.css"> 
            <link rel="stylesheet" href="/assets/styles/layout_header.css">
            <link rel="stylesheet" href="/assets/styles/layout_homepage.css">
            <link rel="stylesheet" href="/assets/styles/layout_about.css">
            <link rel="stylesheet" href="/assets/styles/layout_services.css">
            <link rel="stylesheet" href="/assets/styles/layout_contact.css">
        
        <!-- components -->
            <link rel="stylesheet" href="/assets/styles/components.css">   
        
        <!-- helper classes -->
            <link rel="stylesheet" href="/assets/styles/utilities.css">

        <!-- Old style sheet -->
            <!-- <link rel="stylesheet" href="/assets/styles/style.css?v=2"> -->

		<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        
		<script defer src="/assets/scripts/script.js"></script>

		<title>

            <?php echo $subTitle; ?> | <?php echo $siteTitle; ?>
            
        </title>
        
	</head>

    <body>

        <header>

            <?php
                
                // Logo
                // ****************************************************************************************************************************************
                    include($path."assets/includes/components/header/logo.php");

            ?>

            <?php
                
                // NAV
                // ****************************************************************************************************************************************
                    include($path."assets/includes/components/header/nav.php");

            ?>


            <?php
                
                // NAV - MOBILE
                // ****************************************************************************************************************************************
                    include($path."assets/includes/components/header/nav_mobile.php");

            ?>
        
        </header>

        <?php
            
            // LINK TO TOP OF PAGE
            // ****************************************************************************************************************************************
                include($path."assets/includes/components/link_to_top_of_the_page.php");

        ?>