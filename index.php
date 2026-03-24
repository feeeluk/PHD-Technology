<?php

    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");

    // Set the page title.
    $subTitle = "Home";

    // Set page meta tags.
    $metaDescription = "Homepage";
    $metaKeywords ="Business Analysis, Product Owner, Software Development, Web Development, .Net Development, Project Management, Digital Migrations, Data Maniupulation, Data Management, Artificial Intelligence, Skills Development, Training, Digital Media & Marketing, UI, UX, UI/UX, Proof Of Concept, Hull, Willerby, East Yorkshire, Nationwide";

    // ****************************************************************************************************************************************
    include($root ."/assets/includes/layout/page_open_homepage.php");

            // BUSINESS ANALYSIS
            include($root."/assets/includes/sections/services/business_analysis/business_analysis_description.php");
            
            // DATA
            include($root."/assets/includes/sections/services/data/data_description.php");
            
            // PROOF OF CONCEPT
            include($root."/assets/includes/sections/services/proof_of_concept/proof_of_concept_description.php");
            
            // SOFTWARE DEVELOPMENT
            include($root."/assets/includes/sections/services/software_development/software_development_description.php");
            
            // DIGITAL TRANSFORMATIONS
            include($root."/assets/includes/sections/services/digital_transformation/digital_transformation_description.php");

            // UI/UX
            include($root."/assets/includes/sections/services/ui_ux/ui_ux_description.php");
            
            // SKILLS DEVELOPMENT & TRAINING
            include($root."/assets/includes/sections/services/skills_development_and_training/skills_development_and_training_description.php");

            // ARTIFICIAL INTELLIGENCE
            include($root."/assets/includes/sections/services/artificial_intelligence/artificial_intelligence_description.php");

            // DIGITAL MEDIA & MARKETING
            include($root."/assets/includes/sections/services/digital_media_and_marketing/digital_media_and_marketing_description.php");

    // ****************************************************************************************************************************************
    include($root."/assets/includes/layout/page_close.php");
    
?>