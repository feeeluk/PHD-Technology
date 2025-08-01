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
                    <img src="/assets/images/other/logo.webp" alt="logo">
                </a>
                
            </div>

            <!-- Disclosure -->
            <details id="disclosure_links">

                <summary>

                    <span id="hamburger"></span>

                </summary>     
                
                <nav>
                    <a href="/"><span class="link">Home</span></a>
                    <a href="/pages/case_studies.php"><span class="link">Case Studies</span></a>
                    <a href="/pages/portfolio.php"><span class="link">Portfolio</span></a>
                    <a href="/"><span class="link">Blog</span></a>
                    <a href="/pages/contact.php"><span class="link">Contact</span></a>
                    
                    <details id="disclosure_services">
                        
                        <summary>Services<span class="arrow"></span></summary>
                        
                        <a href="/pages/services/proof_of_concept.php"><span class="link service">Proof of Concept</span></a>
                        <a href="/pages/services/business_analysis.php"><span class="link service">Business Analysis</span></a>
                        <a href="/pages/services/project_management.php"><span class="link service">Project Management</span></a>
                        <a href="/pages/services/software_development.php"><span class="link service">Software Development</span></a>
                        <a href="/pages/services/data_management.php"><span class="link service">Data Management</span></a>
                        <a href="/pages/services/skills_development_and_training.php"><span class="link service">Skills Development & Training</span></a>
                        <a href="/pages/services/artificial_intelligence.php"><span class="link service">Artificial Intelligence</span></a>
                        <a href="/pages/services/digital_media_and_marketing.php"><span class="link service">Digital Media & Marketing</span></a>
                        
                    </details>
                
                </nav>

            </details>    
                    
        </header>