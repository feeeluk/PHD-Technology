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
    include($path."assets/includes/components/header/header.php");

?>

<?php

    // MAIN PAGE
    // _________________________________________________________________________________________________________________________________________
    // _________________________________________________________________________________________________________________________________________

?>

    <article id="introduction">

        <section id="elevator_pitch">

            <?php
            
                // ELEVATOR PITCH
                include($path."assets/includes/page_components/home/elevator_pitch.php");

            ?>

        </section>

        <section id="overview">

            <?php
            
                // DESCRIPTION
                include($path."assets/includes/page_components/home/description.php");

                // SERVICES (smaller devices)
                include($path."assets/includes/page_components/home/services_smaller_devices.php");

                // SERVICES (larger devices)
                include($path."assets/includes/page_components/home/services_larger_devices.php");   

            ?>

        </section>

        <?php
            
            // BUSINESS ANALYSIS - OVERVIEW
            //include($path."assets/includes/page_components/services/business_analysis/business_analysis_description.php");
            
            // PROJECT MANAGEMENT - OVERVIEW
            //include($path."assets/includes/page_components/services/project_management/project_management_overview.php");
            
            // SOFTWARE DEVELOPMENT - OVERVIEW
            //include($path."assets/includes/page_components/services/software_development/software_development_overview.php");
            
            // DATA MANIPULATION - OVERVIEW
            //include($path."assets/includes/page_components/services/data_manipulation/data_manipulation_overview.php");
            
            // SKILLS DEVELOPMENT & TRAINING - OVERVIEW
            //include($path."assets/includes/page_components/services/skills_development_and_training/skills_development_and_training_overview.php");
            
            // PROOF OF CONCEPT - OVERVIEW
            //include($path."assets/includes/page_components/services/proof_of_concept/proof_of_concept_overview.php");

            // ARTIFICIAL INTELLIGENCE - OVERVIEW
            //include($path."assets/includes/page_components/services/artificial_intelligence/artificial_intelligence_overview.php");

            // DIGITAL MEDIA & MARKETING - OVERVIEW
            //include($path."assets/includes/page_components/services/digital_media_and_marketing/digital_media_and_marketing_overview.php");

            // UI/UX - OVERVIEW
            //include($path."assets/includes/page_components/services/ui_ux/ui_ux_overview.php");

            // FOOTER
            // ****************************************************************************************************************************************
            //include($path."assets/includes/components/footer/footer.php");

        ?>

    </article>