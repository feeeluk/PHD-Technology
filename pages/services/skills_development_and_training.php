<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        
        //    ./ = page is located in the root directory
        //    ../ = page is located one folder up
        //    ../../ = page is located two folders up, etc

        // set the site root folder in relation to this page
        $path = "../../";        
        
        // set the page title
        $subTitle = "Skills Development & Training";

    // IMPORT SITE WIDE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        include($path."assets/includes/sections/site_details.php"); 

    // HEADER
    // ****************************************************************************************************************************************
        include($path."assets/includes/sections/header.php");

    // MAIN PAGE
    // _________________________________________________________________________________________________________________________________________
            
        // Overview
        include($path."assets/includes/pages/services/skills_development_and_training/skills_development_and_training_overview.php");

        // Benefits
        include($path."assets/includes/pages/services/skills_development_and_training/skills_development_and_training_benefits.php");

        // Case Studies
        include($path."assets/includes/pages/services/skills_development_and_training/skills_development_and_training_case_studies.php");

        // Prices
        include($path."assets/includes/pages/services/skills_development_and_training/skills_development_and_training_prices.php");

        // Next Steps & How it Works
        include($path."assets/includes/pages/services/skills_development_and_training/skills_development_and_training_next_steps.php");

        // Portfolio
        include($path."assets/includes/pages/services/skills_development_and_training/skills_development_and_training_portfolio.php");     

    // FOOTER
    // ****************************************************************************************************************************************
        include($path."assets/includes/sections/footer.php");

?>