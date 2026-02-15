<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        
        // set the site root folder in relation to this page
        $path = "../";

            //    ./ = page is located in the root directory
            //    ../ = page is located one folder up
            //    ../../ = page is located two folders up, etc       
        
        // set the page title
        $subTitle = "About";


    // HTML 1
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_1.php");
    

        // PAGE CONTENTS HERE

?>

    <div id="about">

        <?php

            // ABOUT SUMMARY
            include($path."assets/includes/page_components/about/about_summary.php");

            // BENEFITS
            include($path."assets/includes/page_components/about/about_benefits.php");
            
            // PRICES
            include($path."assets/includes/page_components/about/about_prices.php");

            // NEXT STEPS
            include($path."assets/includes/page_components/about/about_next_steps.php");

        ?>
    
    </div>

<?php

    // HTML 2
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_2.php");
        
?>