<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        
        //    ./ = page is located in the root directory
        //    ../ = page is located one folder up
        //    ../../ = page is located two folders up, etc

        // set the site root folder in relation to this page
        $path = "../../";        
        
        // set the page title
        $subTitle = "Data Manipulation";

    // HEADER
    // ****************************************************************************************************************************************
        include($path."assets/includes/components/header.php");

    // MAIN PAGE
    // _________________________________________________________________________________________________________________________________________
           
        // Overview
        include($path."assets/includes/page_components/services/data_manipulation/data_manipulation_overview.php");

        // Benefits
        include($path."assets/includes/page_components/services/data_manipulation/data_manipulation_benefits.php");

        // Case Studies
        include($path."assets/includes/page_components/services/data_manipulation/data_manipulation_case_studies.php");

        // Prices
        include($path."assets/includes/page_components/services/data_manipulation/data_manipulation_prices.php");

        // Next Steps & How it Works
        include($path."assets/includes/page_components/services/data_manipulation/data_manipulation_next_steps.php");

        // Portfolio
        include($path."assets/includes/page_components/services/data_manipulation/data_manipulation_portfolio.php");
        
    // FOOTER
    // ****************************************************************************************************************************************
        include($path."assets/includes/components/footer.php");

?>