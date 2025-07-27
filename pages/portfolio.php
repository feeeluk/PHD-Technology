<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        
        //    ./ = page is located in the root directory
        //    ../ = page is located one folder up
        //    ../../ = page is located two folders up, etc

        // set the site root folder in relation to this page
        $path = "../";        
        
        // set the page title
        $subTitle = "Portfolio";

    // IMPORT SITE WIDE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        include($path."assets/includes/sections/site_details.php"); 

    // HEADER
    // **************************************************************************************************************************************** 
        include($path."assets/includes/sections/header.php");

    // MAIN PAGE
    // _________________________________________________________________________________________________________________________________________
        
        // PROOF OF CONCEPTS
        include($path."assets/includes/pages/services/proof_of_concept/proof_of_concept_portfolio.php");

    // FOOTER
    // ****************************************************************************************************************************************
        include($path."assets/includes/sections/footer.php");

?>