<?php
    
    // CONFIG
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");     
        
    // PAGE META
    $subTitle = "Digital Media & Marketing";
    $metaDescription = "Digital Media & Marketing";
    $metaKeywords ="Digital Media & Marketing";

?>

<?php include($root."/assets/includes/layout/page_open.php"); ?>

    <div id="DigitalMediaAndMarketing" class="box">

        <?php

            // Description
            include($root."/assets/includes/sections/services/digital_media_and_marketing/digital_media_and_marketing_description.php");

            // Benefits
            //include($root."/assets/includes/sections/services/digital_media_and_marketing/digital_media_and_marketing_benefits.php");

            // Prices
            include($root."/assets/includes/sections/services/digital_media_and_marketing/digital_media_and_marketing_prices.php");

            // Portfolio
            //include($root."/assets/includes/sections/services/digital_media_and_marketing/digital_media_and_marketing_portfolio.php");
            
            // Next Steps
            include($root."/assets/includes/sections/services/digital_media_and_marketing/digital_media_and_marketing_next_steps.php");

        ?>

    </div>
    
<?php include($root."/assets/includes/layout/page_close.php"); ?>