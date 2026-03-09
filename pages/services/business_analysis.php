<?php
    
    // SET PAGE DETAILS, VARIABLES, & CONSTANTS
    // ****************************************************************************************************************************************

        // set the site root folder in relation to this page
        $path = "../../";

            //    ./ = page is located in the root directory
            //    ../ = page is located one folder up
            //    ../../ = page is located two folders up, etc       

        // set the page title
        $subTitle = "Business Analysis";
        
        // Set page META tags.
        $metaDescription = "Business Analysis";
        $metaKeywords ="Business Analysis, Product Owner, SCRUM, Agile, SCRUM Master";

    // HTML 1
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_1.php");

?>

<div id="BusinessAnalysis" class="box">

    <?php

        // PAGE CONTENTS HERE

            // Description
            include($path."assets/includes/page_sections/services/business_analysis/business_analysis_description.php");

            // Benefits
            include($path."assets/includes/page_sections/services/business_analysis/business_analysis_benefits.php");      
            
            // Prices
            include($path."assets/includes/page_sections/services/business_analysis/business_analysis_prices.php");

            // Portfolio
            include($path."assets/includes/page_sections/services/business_analysis/business_analysis_portfolio.php");
            
            // Case Studies
            //include($path."assets/includes/page_sections/services/business_analysis/business_analysis_case_studies.php");
            
            // Next Steps
            include($path."assets/includes/page_sections/services/business_analysis/business_analysis_next_steps.php");

    ?>

</div>
    
<?php

    // HTML 2
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_2.php");
    
?>