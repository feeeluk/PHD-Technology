<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        
        // set the site root folder in relation to this page
        $path = "../../";

            //    ./ = page is located in the root directory
            //    ../ = page is located one folder up
            //    ../../ = page is located two folders up, etc       
        
        // set the page title
        $subTitle = "Business Analysis";

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

        <div class="pageContainer">

            <?php
            
                // LINK TO TOP OF THE PAGE
                // ****************************************************************************************************************************************
                include($path."assets/includes/components/header/link_to_top_of_the_page.php");

            ?>

           <div class="subContainer">

                
                <?php

                    // Overview
                    include($path."assets/includes/page_components/services/business_analysis/business_analysis_description.php");

                    // Benefits
                    //include($path."assets/includes/page_components/services/business_analysis/business_analysis_benefits.php");      
                    
                    // Prices
                    // include($path."assets/includes/page_components/services/business_analysis/business_analysis_prices.php");

                    // Portfolio
                    // include($path."assets/includes/page_components/services/business_analysis/business_analysis_portfolio.php");
                    
                    // Next Steps & How it Works
                    //include($path."assets/includes/page_components/services/business_analysis/business_analysis_next_steps.php");

                    // Case Studies
                    // include($path."assets/includes/page_components/services/business_analysis/business_analysis_case_studies.php");
    

                ?>

            </div><!-- end subContainer -->
            
            <?php

                // FOOTER
                // ****************************************************************************************************************************************
                include($path."assets/includes/components/footer/footer.php");

            ?>
        
        </div><!-- end pageContainer -->

    </body>

</html>