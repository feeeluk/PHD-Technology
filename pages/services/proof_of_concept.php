<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        
        //    ./ = page is located in the root directory
        //    ../ = page is located one folder up
        //    ../../ = page is located two folders up, etc

        // set the site root folder in relation to this page
        $path = "../../";        
        
        // set the page title
        $subTitle = "Proof of Concept";

    // HEADER
    // ****************************************************************************************************************************************
        include($path."assets/includes/components/header.php");

    // MAIN PAGE
    // _________________________________________________________________________________________________________________________________________
        
        // Overview
        include($path."assets/includes/page_components/services/proof_of_concept/proof_of_concept_overview.php");

        // Benefits
        include($path."assets/includes/page_components/services/proof_of_concept/proof_of_concept_benefits.php");

        // Case Studies
        include($path."assets/includes/page_components/services/proof_of_concept/proof_of_concept_case_studies.php");

        // Prices
        include($path."assets/includes/page_components/services/proof_of_concept/proof_of_concept_prices.php");

        // Next Steps & How it Works
        include($path."assets/includes/page_components/services/proof_of_concept/proof_of_concept_next_steps.php");

        // Portfolio
        include($path."assets/includes/page_components/services/proof_of_concept/proof_of_concept_portfolio.php");

    // FOOTER
    // ****************************************************************************************************************************************
        include($path."assets/includes/components/footer.php");

?>