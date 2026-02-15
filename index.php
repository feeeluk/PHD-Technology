<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        
        // set the site root folder in relation to this page
        $path = "./";

            //    ./ = page is located in the root directory
            //    ../ = page is located one folder up
            //    ../../ = page is located two folders up, etc       
        
        // set the page title
        $subTitle = "Home";


    // HTML 1 (Homepage version)
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_1_homepage.php");
    

        // PAGE CONTENTS HERE

            // BUSINESS ANALYSIS
            include($path."assets/includes/page_components/services/business_analysis/business_analysis_description.php");
            
            // PROJECT MANAGEMENT
            include($path."assets/includes/page_components/services/project_management/project_management_description.php");
            
            // SOFTWARE DEVELOPMENT
            include($path."assets/includes/page_components/services/software_development/software_development_description.php");
            
            // DATA MANIPULATION
            include($path."assets/includes/page_components/services/data_manipulation/data_manipulation_description.php");
            
            // SKILLS DEVELOPMENT & TRAINING
            include($path."assets/includes/page_components/services/skills_development_and_training/skills_development_and_training_description.php");
            
            // PROOF OF CONCEPT
            include($path."assets/includes/page_components/services/proof_of_concept/proof_of_concept_description.php");

            // ARTIFICIAL INTELLIGENCE
            include($path."assets/includes/page_components/services/artificial_intelligence/artificial_intelligence_description.php");

            // DIGITAL MEDIA & MARKETING
            include($path."assets/includes/page_components/services/digital_media_and_marketing/digital_media_and_marketing_description.php");

            // UI/UX
            include($path."assets/includes/page_components/services/ui_ux/ui_ux_description.php");


    // HTML 2
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_2.php");
    
?>