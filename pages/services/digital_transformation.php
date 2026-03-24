<?php
    
    // CONFIG
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");      
        
    // PAGE META
    $subTitle = "Digital Transformation";
    $metaDescription = "Digital Transformation";
    $metaKeywords ="Digital Transformation";

?>

<?php  include($root."/assets/includes/layout/page_open.php"); ?>

    <div id="DigitalTransformation" class="box">

        <?php

            // Description
            include($root."/assets/includes/sections/services/digital_transformation/digital_transformation_description.php");

            // Benefits
            include($root."/assets/includes/sections/services/digital_transformation/digital_transformation_benefits.php");

            // Prices
            include($root."/assets/includes/sections/services/digital_transformation/digital_transformation_prices.php");

            // Portfolio
            //include($root."/assets/includes/sections/services/digital_transformation/digital_transformation_portfolio.php");

            // Next Steps
            include($root."/assets/includes/sections/services/digital_transformation/digital_transformation_next_steps.php");

        ?>

    </div>
    
<?php include($root."/assets/includes/layout/page_close.php"); ?>