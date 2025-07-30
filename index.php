<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        
        //    ./ = page is located in the root directory
        //    ../ = page is located one folder up
        //    ../../ = page is located two folders up, etc

        // set the site root folder in relation to this page
        $path = "./";        
        
        // set the page title
        $subTitle = "Home";

    // HEADER
    // ****************************************************************************************************************************************
        include($path."assets/includes/sections/header.php");

    // MAIN PAGE
    // _________________________________________________________________________________________________________________________________________
        
        // ABOUT
        include($path."assets/includes/page_components/home/about.php");
        
        // SERVICES
        include($path."assets/includes/page_components/services/services_links.php");

        // BENEFITS
        include($path."assets/includes/page_components/home/benefits.php");

        // PROOF OF CONCEPT - OVERVIEW
        include($path."assets/includes/page_components/services/proof_of_concept/proof_of_concept_overview.php");

        // BUSINESS ANALYSIS - OVERVIEW
        include($path."assets/includes/page_components/services/business_analysis/business_analysis_overview.php");

        // PROJECT MANAGEMENT - OVERVIEW
        include($path."assets/includes/page_components/services/project_management/project_management_overview.php");

        // SOFTWARE DEVELOPMENT - OVERVIEW
        include($path."assets/includes/page_components/services/software_development/software_development_overview.php");

        // DATA MANAGEMENT - OVERVIEW
        include($path."assets/includes/page_components/services/data_management/data_management_overview.php");

        // SKILLS DEVELOPMENT & TRAINING - OVERVIEW
        include($path."assets/includes/page_components/services/skills_development_and_training/skills_development_and_training_overview.php");

        // ARTIFICIAL INTELLIGENCE - OVERVIEW
        include($path."assets/includes/page_components/services/artificial_intelligence/artificial_intelligence_overview.php");

        // DIGITAL MEDIA & MARKETING - OVERVIEW
        include($path."assets/includes/page_components/services/digital_media_and_marketing/digital_media_and_marketing_overview.php");

        // PRICES
        include($path."assets/includes/page_components/prices/prices.php");

    // FOOTER
    // ****************************************************************************************************************************************
        include($path."assets/includes/sections/footer.php");

?>