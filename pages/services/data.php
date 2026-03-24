<?php
    
    // CONFIG
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");      

    // PAGE META
    $subTitle = "Data";
    $metaDescription = "Data";
    $metaKeywords ="Data, Data Management, Data Integration, Data Migration, Analytics & Reporting";

?>

<?php include($root."/assets/includes/layout/page_open.php"); ?>

    <div id="Data" class="box">

        <?php

            // Description
            include($root."/assets/includes/sections/services/data/data_description.php");

            // Benefits
            include($root."/assets/includes/sections/services/data/data_benefits.php");
            
            // Prices
            include($root."/assets/includes/sections/services/data/data_prices.php");

            // Portfolio
            //include($root."/assets/includes/sections/services/data/data_portfolio.php");

            // Next Steps
            include($root."/assets/includes/sections/services/data/data_next_steps.php");

        ?>

    </div>
    
<?php include($root."/assets/includes/layout/page_close.php"); ?>