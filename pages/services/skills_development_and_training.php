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

    // HEADER
    // ****************************************************************************************************************************************
        include($path."assets/includes/components/header.php");

    // MAIN PAGE
    // _________________________________________________________________________________________________________________________________________
            
        // Overview
        include($path."assets/includes/page_components/services/skills_development_and_training/skills_development_and_training_overview.php");

        // Benefits
        include($path."assets/includes/page_components/services/skills_development_and_training/skills_development_and_training_benefits.php");

        // Prices
        include($path."assets/includes/page_components/services/skills_development_and_training/skills_development_and_training_prices.php");

        // Portfolio
        include($path."assets/includes/page_components/services/skills_development_and_training/skills_development_and_training_portfolio.php");
        
        // Next Steps & How it Works
        include($path."assets/includes/page_components/services/skills_development_and_training/skills_development_and_training_next_steps.php");
        
        // Case Studies
        // include($path."assets/includes/page_components/services/skills_development_and_training/skills_development_and_training_case_studies.php");    

    // FOOTER
    // ****************************************************************************************************************************************
        include($path."assets/includes/components/footer.php");

?>