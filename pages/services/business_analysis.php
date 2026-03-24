<?php
    
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");       

    // Set the page title.
    $subTitle = "Business Analysis";
    
    // Set page meta tags.
    $metaDescription = "Business Analysis";
    $metaKeywords ="Business Analysis, Product Owner, SCRUM, Agile, SCRUM Master";

    // HTML 1
    // ****************************************************************************************************************************************
    include($root."/assets/includes/components/page/html_1.php");

?>

<div id="BusinessAnalysis" class="box">

    <?php

            // Description
            include($root."/assets/includes/page_sections/services/business_analysis/business_analysis_description.php");

            // Benefits
            include($root."/assets/includes/page_sections/services/business_analysis/business_analysis_benefits.php");      
            
            // Prices
            include($root."/assets/includes/page_sections/services/business_analysis/business_analysis_prices.php");

            // Portfolio
            //include($root."/assets/includes/page_sections/services/business_analysis/business_analysis_portfolio.php");
            
            // Next Steps
            include($root."/assets/includes/page_sections/services/business_analysis/business_analysis_next_steps.php");

    ?>

</div>
    
<?php

    // HTML 2
    // ****************************************************************************************************************************************
    include($root."/assets/includes/components/page/html_2.php");
    
?>