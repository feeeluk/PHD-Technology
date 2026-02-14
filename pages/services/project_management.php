<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        

        // set the site root folder in relation to this page
        $path = "../../";

            //    ./ = page is located in the root directory
            //    ../ = page is located one folder up
            //    ../../ = page is located two folders up, etc       
        

        // set the page title
        $subTitle = "Project Management";


    // HTML 1
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_1.php");
    

        // PAGE CONTENTS HERE

            // Description
            include($path."assets/includes/page_components/services/project_management/project_management_description.php");

            // Benefits
            include($path."assets/includes/page_components/services/project_management/project_management_benefits.php");

            // Prices
            //include($path."assets/includes/page_components/services/project_management/project_management_prices.php");

            // Portfolio
            //include($path."assets/includes/page_components/services/project_management/project_management_portfolio.php");
            
            // Case Studies
            // include($path."assets/includes/page_components/services/project_management/project_management_case_studies.php");

            // Next Steps
            include($path."assets/includes/page_components/services/project_management/project_management_next_steps.php");


    // HTML 2
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_2.php");
    
?>