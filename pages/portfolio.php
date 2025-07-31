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

    // HEADER
    // **************************************************************************************************************************************** 
        include($path."assets/includes/sections/header.php");

    // MAIN PAGE
    // _________________________________________________________________________________________________________________________________________
        
?>

        <article class="portfolio margin_top">
                
            <h1>PORTFOLIO</h1>
                
            <section class="description">

                <div>
                    
                    <p>
                        Here are some examples of my work, organised by service type:
                    </p>
                    
                </div>

            </section>

        </article>

<?php

        // SERVICE LINKS
        // include($path."assets/includes/page_components/services/services_links.php");
    
        // PROOF OF CONCEPTS
        include($path."assets/includes/page_components/services/proof_of_concept/proof_of_concept_portfolio.php");

        // BUSINESS ANALYSIS
        include($path."assets/includes/page_components/services/business_analysis/business_analysis_portfolio.php");
        
        // PROJECT MANAGEMENT
        include($path."assets/includes/page_components/services/project_management/project_management_portfolio.php");
        
        // SOFTWARE DEVELOPMENT
        include($path."assets/includes/page_components/services/software_development/software_development_portfolio.php");
        
        // DATA MANAGEMENT
        include($path."assets/includes/page_components/services/data_management/data_management_portfolio.php");
        
        // SKILLS DEVELOPMENT & TRAINING
        include($path."assets/includes/page_components/services/skills_development_and_training/skills_development_and_training_portfolio.php");
        
        // ARTIFICIAL INTELLIGENCE
        include($path."assets/includes/page_components/services/artificial_intelligence/artificial_intelligence_portfolio.php");
        
        // DIGITAL MEDIA & MARKETING
        include($path."assets/includes/page_components/services/digital_media_and_marketing/digital_media_and_marketing_portfolio.php");

    // FOOTER
    // ****************************************************************************************************************************************
        include($path."assets/includes/sections/footer.php");

?>