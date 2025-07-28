<?php

    // IMPORT SITE WIDE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        include($path."assets/includes/other/site_details.php"); 
        
?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" type="image/x-icon" href="/assets/images/favicon/favicon.ico">
        <link rel="stylesheet" href="/assets/styles/style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
        
		<script defer src="/assets/scripts/script.js"></script>

		<title>

            <?php echo $subTitle; ?> | <?php echo $siteTitle; ?>
            
        </title>
        
	</head>

    <body>

        <header>
        
            <div id="logo">

                <a href="/">
                    <img src="/assets/images/other/phd_technology_solutions_logo.webp" alt="logo">
                </a>
                
            </div>

            <!-- Disclosure -->
            <details>

                <summary>

                    <span id="hamburger">
                    </span>

                </summary>

                <nav>
                    
                    <div id="naviagation_links">

                        <span><a href="/">Home</a></span>
                        <span><a href="/pages/case_studies.php">Case Studies</a></span>
                        <span><a href="/pages/portfolio.php">Portfolio</a></span>
                        <span><a href="/">Blog</a></span>
                        <span><a href="/pages/contact.php">Contact</a></span>

                    </div>

                    <div id="naviagation_services">

                        <span><a href="/pages/services/proof_of_concept.php">Proof of Concept</a></span>
                        <span><a href="/pages/services/business_analysis.php">Business Analysis</a></span>
                        <span><a href="/pages/services/project_management.php">Project Management</a></span>
                        <span><a href="/pages/services/software_development.php">Software Development</a></span>
                        <span><a href="/pages/services/data_management.php">Data Management</a></span>
                        <span><a href="/pages/services/skills_development_and_training.php">Skills Development & Training</a></span>
                        <span><a href="/pages/services/artificial_intelligence.php">Artificial Intelligence</a></span>
                        <span><a href="/pages/services/digital_media_and_marketing.php">Digital Media & Marketing</a></span>

                    </div>

                </nav>

            </details>

        </header>