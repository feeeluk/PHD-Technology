<?php
    
    // SET PAGE DETAILS, VARIABLES, & CONSTANTS
    // ****************************************************************************************************************************************
        
        // set the site root folder in relation to this page
        $path = "../";

            //    ./ = page is located in the root directory
            //    ../ = page is located one folder up
            //    ../../ = page is located two folders up, etc       
        
        // set the page title
        $subTitle = "About";

        // Set page META tags.
        $metaDescription = "About";
        $metaKeywords ="Business Analysis, Product Owner, Software Development, Web Development, .Net Development, Project Management, Digital Migrations, Data Maniupulation, Data Management, Artificial Intelligence, Skills Development, Training, Digital Media & Marketing, UI, UX, UI/UX, Proof Of Concept";

    // HTML 1
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_1.php");
    

        // PAGE CONTENTS HERE

?>

    <div id="About" class="box">

        <?php

            // ABOUT DESCRIPTION
            include($path."assets/includes/page_sections/about/about_description.php");

            // BENEFITS
            include($path."assets/includes/page_sections/about/about_benefits.php");
            
            // PRICES
            include($path."assets/includes/page_sections/about/about_prices.php");

            // NEXT STEPS
            include($path."assets/includes/page_sections/about/about_next_steps.php");

        ?>
    
    </div>

<?php

    // HTML 2
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_2.php");
        
?>