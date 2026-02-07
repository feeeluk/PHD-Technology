<?php

    // IMPORT SITE WIDE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        include($path."assets/includes/components/site_details.php"); 
        
?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" type="image/x-icon" href="/assets/images/favicon/favicon.ico">
        
        <link rel="stylesheet" href="css/reset.css">  <!-- resets CSS -->
        <link rel="stylesheet" href="css/variables.css"> <!-- design system -->
        <link rel="stylesheet" href="css/layout.css"> <!-- containers, grids, page structure, and mobile-first layout rules -->
        <link rel="stylesheet" href="css/components.css"> <!-- buttons, cards, navbars, forms -->
        <link rel="stylesheet" href="css/utilities.css"> <!-- helper classes -->
        <link rel="stylesheet" href="/assets/styles/style.css?v=2">

		<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        
		<script defer src="/assets/scripts/script.js"></script>

		<title>

            <?php echo $subTitle; ?> | <?php echo $siteTitle; ?>
            
        </title>
        
	</head>

    <body>

        <header>
        
            <div id="logo">

                <a href="/">

                    <img src="/assets/images/other/logo.webp" alt="logo">

                </a>
            
            </div>

            <?php
                
                // NAVIGATION
                // ****************************************************************************************************************************************
                    include($path."assets/includes/components/navigation.php");

            ?>


            <?php
                
                // MOBILE NAVIGATION
                // ****************************************************************************************************************************************
                    include($path."assets/includes/components/mobile_navigation.php");

            ?>
        
        </header>

        <?php
            
            // LINK TO TOP OF PAGE
            // ****************************************************************************************************************************************
                include($path."assets/includes/components/link_to_top_of_the_page.php");

        ?>