<?php
    
    // SET PAGE DETAILS, VARIABLES, & CONSTANTS
    // ****************************************************************************************************************************************
        
        // set the site root folder in relation to this page
        $path = "../../";

            //    ./ = page is located in the root directory
            //    ../ = page is located one folder up
            //    ../../ = page is located two folders up, etc       
        
        // set the page title
        $subTitle = "Digital Transformation";

        // Set page META tags.
        $metaDescription = "Digital Transformation";
        $metaKeywords ="Digital Transformation";

    // HTML 1
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_1.php");

?>

<div id="DigitalTransformation" class="box">

    <?php
    

        // PAGE CONTENTS HERE

            // Description
            include($path."assets/includes/page_sections/services/digital_transformation/digital_transformation_description.php");

            // Benefits
            include($path."assets/includes/page_sections/services/digital_transformation/digital_transformation_benefits.php");

            // Prices
            include($path."assets/includes/page_sections/services/digital_transformation/digital_transformation_prices.php");

            // Portfolio
            include($path."assets/includes/page_sections/services/digital_transformation/digital_transformation_portfolio.php");
            
            // Case Studies
            // include($path."assets/includes/page_sections/services/digital_transformation/digital_transformation_case_studies.php");

            // Next Steps
            include($path."assets/includes/page_sections/services/digital_transformation/digital_transformation_next_steps.php");

    ?>

</div>
    
<?php

    // HTML 2
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_2.php");
    
?>