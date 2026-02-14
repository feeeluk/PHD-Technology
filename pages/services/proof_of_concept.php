<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        

        // set the site root folder in relation to this page
        $path = "../../";

            //    ./ = page is located in the root directory
            //    ../ = page is located one folder up
            //    ../../ = page is located two folders up, etc       
        

        // set the page title
        $subTitle = "Proof of Concept";


    // HTML 1
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_1.php");
    

        // PAGE CONTENTS HERE

            // Description
            include($path."assets/includes/page_components/services/proof_of_concept/proof_of_concept_description.php");

            // Benefits
            //include($path."assets/includes/page_components/services/proof_of_concept/proof_of_concept_benefits.php");
            
            // Portfolio
            //include($path."assets/includes/page_components/services/proof_of_concept/proof_of_concept_portfolio.php");
            
            // Next Steps
            include($path."assets/includes/page_components/services/proof_of_concept/proof_of_concept_next_steps.php");
            
            // Prices
            //include($path."assets/includes/page_components/services/proof_of_concept/proof_of_concept_prices.php");
            
            // Case Studies
            // include($path."assets/includes/page_components/services/proof_of_concept/proof_of_concept_case_studies.php");


    // HTML 2
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_2.php");
    
?>