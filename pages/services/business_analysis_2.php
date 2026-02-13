<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        
        //    ./ = page is located in the root directory
        //    ../ = page is located one folder up
        //    ../../ = page is located two folders up, etc

        // set the site root folder in relation to this page
        $path = "../../";        
        
        // set the page title
        $subTitle = "Business Analysis";

    // HEADER
    // ****************************************************************************************************************************************
        include($path."assets/includes/components/header/header.php");

    // MAIN PAGE
    // _________________________________________________________________________________________________________________________________________

?>

    <div class="container">

        <?php
                
                // Overview
                include($path."assets/includes/page_components/services/business_analysis/business_analysis_description.php");

                // Benefits
                //include($path."assets/includes/page_components/services/business_analysis/business_analysis_benefits.php");      
                
                // Prices
                // include($path."assets/includes/page_components/services/business_analysis/business_analysis_prices.php");

                // Portfolio
                // include($path."assets/includes/page_components/services/business_analysis/business_analysis_portfolio.php");
                
                // Next Steps & How it Works
                include($path."assets/includes/page_components/services/business_analysis/business_analysis_next_steps.php");

                // Case Studies
                // include($path."assets/includes/page_components/services/business_analysis/business_analysis_case_studies.php");

        ?>

</div>

<?php

    // FOOTER
    // ****************************************************************************************************************************************
        include($path."assets/includes/components/footer/footer.php");

?>