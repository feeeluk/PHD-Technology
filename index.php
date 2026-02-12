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

    // HEAD
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/head/head.php");
    
?>

    <body>

        <?php
            
            // HEADER
            // ****************************************************************************************************************************************
            include($path."assets/includes/components/header/header.php");

        ?>

        <div ID="HomepageContainer">

            <?php
            
                // LINK TO TOP OF THE PAGE
                // ****************************************************************************************************************************************
                include($path."assets/includes/components/header/link_to_top_of_the_page.php");

                // INTRODUCTION
                // ****************************************************************************************************************************************
                include($path."assets/includes/page_components/home/introduction.php");

            ?>

            <div ID="HomepageSubContainer">

                <div class="subContainer">

                    <?php
                        
                        // BUSINESS ANALYSIS
                        include($path."assets/includes/page_components/services/business_analysis/business_analysis_description.php");
                        
                        // PROJECT MANAGEMENT
                        //include($path."assets/includes/page_components/services/project_management/project_management_overview.php");
                        
                        // SOFTWARE DEVELOPMENT
                        //include($path."assets/includes/page_components/services/software_development/software_development_overview.php");
                        
                        // DATA MANIPULATION
                        //include($path."assets/includes/page_components/services/data_manipulation/data_manipulation_overview.php");
                        
                        // SKILLS DEVELOPMENT & TRAINING
                        //include($path."assets/includes/page_components/services/skills_development_and_training/skills_development_and_training_overview.php");
                        
                        // PROOF OF CONCEPT
                        //include($path."assets/includes/page_components/services/proof_of_concept/proof_of_concept_overview.php");

                        // ARTIFICIAL INTELLIGENCE
                        //include($path."assets/includes/page_components/services/artificial_intelligence/artificial_intelligence_overview.php");

                        // DIGITAL MEDIA & MARKETING
                        //include($path."assets/includes/page_components/services/digital_media_and_marketing/digital_media_and_marketing_overview.php");

                        // UI/UX
                        //include($path."assets/includes/page_components/services/ui_ux/ui_ux_overview.php");

                    ?>

                </div><!-- end subContainer -->

                <?php

                    // FOOTER
                    // ****************************************************************************************************************************************
                    //include($path."assets/includes/components/footer/footer.php");

                ?>

            </div><!-- end HomepageSubContainer -->
        
        </div><!-- end HomepageContainer -->

    </body>

</html>