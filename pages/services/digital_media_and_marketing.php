<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        
        //    ./ = page is located in the root directory
        //    ../ = page is located one folder up
        //    ../../ = page is located two folders up, etc

        // set the site root folder in relation to this page
        $path = "../../";        
        
        // set the page title
        $subTitle = "Digital Media & Marketing";

    // HEADER
    // ****************************************************************************************************************************************
        include($path."assets/includes/components/header.php");

    // MAIN PAGE
    // _________________________________________________________________________________________________________________________________________
          
        // Overview
        include($path."assets/includes/page_components/services/digital_media_and_marketing/digital_media_and_marketing_overview.php");

        // Benefits
        include($path."assets/includes/page_components/services/digital_media_and_marketing/digital_media_and_marketing_benefits.php");

        // Prices
        include($path."assets/includes/page_components/services/digital_media_and_marketing/digital_media_and_marketing_prices.php");

        // Portfolio
        include($path."assets/includes/page_components/services/digital_media_and_marketing/digital_media_and_marketing_portfolio.php");
        
        // Next Steps & How it Works
        include($path."assets/includes/page_components/services/digital_media_and_marketing/digital_media_and_marketing_next_steps.php");
        
        // Case Studies
        // include($path."assets/includes/page_components/services/digital_media_and_marketing/digital_media_and_marketing_case_studies.php");

    // FOOTER
    // ****************************************************************************************************************************************
        include($path."assets/includes/components/footer.php");

?>