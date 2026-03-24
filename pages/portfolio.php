<?php
    
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");      
        
    // Set the page title.
    $subTitle = "Portfolio";

    // Set page meta tags.
    $metaDescription = "Portfolio";
    $metaKeywords ="Portfolio, Showcase, Case Studies, Projects, Past Projects, Examples, Business Analysis, Product Owner, Software Development, Web Development, .Net Development, Project Management, Digital Migrations, Data Maniupulation, Data Management, Artificial Intelligence, Skills Development, Training, Digital Media & Marketing, UI, UX, UI/UX, Proof Of Concept";

    // HTML 1
    // ****************************************************************************************************************************************
    include($root."/assets/includes/components/page/html_1.php");
     
            echo "<div id='Portfolio' class='elevatorPitch'>";
                    
                echo "<h1>";
                    echo "Poftfolio";
                echo "</h1>";
            
                echo "<h2>";
                    echo "Here are some examples of our work:";
                echo "</h2>";
                
            echo "</div>";
        
            // BUSINESS ANALYSIS
            //include($root."/assets/includes/page_sections/services/business_analysis/business_analysis_portfolio.php");

            // DATA
            //include($root."/assets/includes/page_sections/services/data/data_portfolio.php");

            // PROOF OF CONCEPTS
            include($root."/assets/includes/page_sections/services/proof_of_concept/proof_of_concept_portfolio.php");

            // SOFTWARE DEVELOPMENT
            include($root."/assets/includes/page_sections/services/software_development/software_development_portfolio.php");
            
            // DIGITAL TRANSFORMATION
            //include($root."/assets/includes/page_sections/services/digital_transformation/digital_transformation_portfolio.php");
            
            // UI/UX
            //include($root."/assets/includes/page_sections/services/ui_ux/ui_ux_portfolio.php");
            
            // SKILLS DEVELOPMENT & TRAINING
            //include($root."/assets/includes/page_sections/services/skills_development_and_training/skills_development_and_training_portfolio.php");
            
            // ARTIFICIAL INTELLIGENCE
            //include($root."/assets/includes/page_sections/services/artificial_intelligence/artificial_intelligence_portfolio.php");
            
            // DIGITAL MEDIA & MARKETING
            //include($root."/assets/includes/page_sections/services/digital_media_and_marketing/digital_media_and_marketing_portfolio.php");

    // HTML 2
    // ****************************************************************************************************************************************
    include($root."/assets/includes/components/page/html_2.php");
    
?>