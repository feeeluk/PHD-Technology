<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        

        // set the site root folder in relation to this page
        $path = "../../";

            //    ./ = page is located in the root directory
            //    ../ = page is located one folder up
            //    ../../ = page is located two folders up, etc       
        

        // set the page title
        $subTitle = "Skills Development & Training";


    // HTML 1
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_1.php");
    

        // PAGE CONTENTS HERE

            // Description
            include($path."assets/includes/page_components/services/skills_development_and_training/skills_development_and_training_description.php");

            // Benefits
            //include($path."assets/includes/page_components/services/skills_development_and_training/skills_development_and_training_benefits.php");

            // Prices
            //include($path."assets/includes/page_components/services/skills_development_and_training/skills_development_and_training_prices.php");

            // Portfolio
            //nclude($path."assets/includes/page_components/services/skills_development_and_training/skills_development_and_training_portfolio.php");
            
            // Next Steps
            include($path."assets/includes/page_components/services/skills_development_and_training/skills_development_and_training_next_steps.php");
            
            // Case Studies
            // include($path."assets/includes/page_components/services/skills_development_and_training/skills_development_and_training_case_studies.php"); 


    // HTML 2
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_2.php");
    
?>