<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        
        //    ./ = page is located in the root directory
        //    ../ = page is located one folder up
        //    ../../ = page is located two folders up, etc

        // set the site root folder in relation to this page
        $path = "../";        
        
        // set the page title
        $subTitle = "About";

    // HEADER
    // **************************************************************************************************************************************** 
        include($path."assets/includes/components/header.php");

    // MAIN PAGE
    // _________________________________________________________________________________________________________________________________________
        

        // ABOUT SUMMARY
        include($path."assets/includes/page_components/about/about_summary.php");

        // BENEFITS
        include($path."assets/includes/page_components/about/benefits.php");
        
        // PRICES
        include($path."assets/includes/page_components/about/prices.php");

        // NEXT STEPS
        include($path."assets/includes/page_components/about/next_steps.php");

    // FOOTER
    // ****************************************************************************************************************************************
        include($path."assets/includes/components/footer.php");

?>