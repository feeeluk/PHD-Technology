<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        

        // set the site root folder in relation to this page
        $path = "../../";

            //    ./ = page is located in the root directory
            //    ../ = page is located one folder up
            //    ../../ = page is located two folders up, etc       
        

        // set the page title
        $subTitle = "Software Development";


    // HTML 1
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_1.php");
    

        // PAGE CONTENTS HERE

            // Description
            include($path."assets/includes/page_components/services/software_development/software_development_description.php");

            // Benefits
            include($path."assets/includes/page_components/services/software_development/software_development_benefits.php");

            // Prices
            include($path."assets/includes/page_components/services/software_development/software_development_prices.php");
            
            // Portfolio
            include($path."assets/includes/page_components/services/software_development/software_development_portfolio.php"); 
            
            // Case Studies
            //nclude($path."assets/includes/page_components/services/software_development/software_development_case_studies.php");
            
            // Next Steps
            include($path."assets/includes/page_components/services/software_development/software_development_next_steps.php");
    

    // HTML 2
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_2.php");
    
?>