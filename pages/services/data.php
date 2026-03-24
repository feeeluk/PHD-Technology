<?php
    
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");      

    // Set the page title.
    $subTitle = "Data";
    
    /// Set page meta tags.
    $metaDescription = "Data";
    $metaKeywords ="Data, Data Management, Data Integration, Data Migration, Analytics & Reporting";

    // HTML 1
    // ****************************************************************************************************************************************
    include($root."/assets/includes/components/page/html_1.php");
        
?>

<div id="Data" class="box">

    <?php

            // Description
            include($root."/assets/includes/page_sections/services/data/data_description.php");

            // Benefits
            include($root."/assets/includes/page_sections/services/data/data_benefits.php");
            
            // Prices
            include($root."/assets/includes/page_sections/services/data/data_prices.php");

            // Portfolio
            //include($root."/assets/includes/page_sections/services/data/data_portfolio.php");

            // Next Steps
            include($root."/assets/includes/page_sections/services/data/data_next_steps.php");

    ?>

</div>
    
<?php


    // HTML 2
    // ****************************************************************************************************************************************
    include($root."/assets/includes/components/page/html_2.php");

?>