<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        
        //    ./ = page is located in the root directory
        //    ../ = page is located one folder up
        //    ../../ = page is located two folders up, etc

        // set the site root folder in relation to this page
        $path = "../";        
        
        // set the page title
        $subTitle = "Case Studes";

    // HEADER
    // ****************************************************************************************************************************************
        include($path."assets/includes/components/header.php");

    // MAIN PAGE
    // _________________________________________________________________________________________________________________________________________
        
?>

        <article class="case_studies">
                
            <h1 class="margin_top title">CASE STUDIES</h1>
                
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
        include($path."assets/includes/page_components/services/proof_of_concept/proof_of_concept_case_studies.php");

        // BUSINESS ANALYSIS
        include($path."assets/includes/page_components/services/business_analysis/business_analysis_case_studies.php");
        
        // PROJECT MANAGEMENT
        include($path."assets/includes/page_components/services/project_management/project_management_case_studies.php");
        
        // SOFTWARE DEVELOPMENT
        include($path."assets/includes/page_components/services/software_development/software_development_case_studies.php");
        
        // DATA MANIPULATION
        include($path."assets/includes/page_components/services/data_manipulation/data_manipulation_case_studies.php");
        
        // SKILLS DEVELOPMENT & TRAINING
        include($path."assets/includes/page_components/services/skills_development_and_training/skills_development_and_training_case_studies.php");
        
        // ARTIFICIAL INTELLIGENCE
        include($path."assets/includes/page_components/services/artificial_intelligence/artificial_intelligence_case_studies.php");
        
        // DIGITAL MEDIA & MARKETING
        include($path."assets/includes/page_components/services/digital_media_and_marketing/digital_media_and_marketing_case_studies.php");

    // FOOTER
    // ****************************************************************************************************************************************
        include($path."assets/includes/components/footer.php");

?>