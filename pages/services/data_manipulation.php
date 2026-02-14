<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        

        // set the site root folder in relation to this page
        $path = "../../";

            //    ./ = page is located in the root directory
            //    ../ = page is located one folder up
            //    ../../ = page is located two folders up, etc       
        

        // set the page title
        $subTitle = "Data Manipulation";


    // HTML 1
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_1.php");
    

        // PAGE CONTENTS HERE

            // Description
            include($path."assets/includes/page_components/services/data_manipulation/data_manipulation_description.php");

            // Benefits
            include($path."assets/includes/page_components/services/data_manipulation/data_manipulation_benefits.php");
            
            // Prices
            include($path."assets/includes/page_components/services/data_manipulation/data_manipulation_prices.php");

            // Portfolio
            include($path."assets/includes/page_components/services/data_manipulation/data_manipulation_portfolio.php");
            
            // Case Studies
            // include($path."assets/includes/page_components/services/data_manipulation/data_manipulation_case_studies.php");

            // Next Steps
            include($path."assets/includes/page_components/services/data_manipulation/data_manipulation_next_steps.php");


    // HTML 2
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_2.php");
    
?>