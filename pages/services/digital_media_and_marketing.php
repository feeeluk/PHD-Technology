<?php
    
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");     
        
    // Set the page title.
    $subTitle = "Digital Media & Marketing";

    // Set page meta tags.
    $metaDescription = "Digital Media & Marketing";
    $metaKeywords ="Digital Media & Marketing";

    // HTML 1
    // ****************************************************************************************************************************************
    include($root."/assets/includes/layout/page/html_1.php");

?>

<div id="DigitalMediaAndMarketing" class="box">

    <?php

            // Description
            include($root."/assets/includes/sections/services/digital_media_and_marketing/digital_media_and_marketing_description.php");

            // Benefits
            include($root."/assets/includes/sections/services/digital_media_and_marketing/digital_media_and_marketing_benefits.php");

            // Prices
            include($root."/assets/includes/sections/services/digital_media_and_marketing/digital_media_and_marketing_prices.php");

            // Portfolio
            //include($root."/assets/includes/sections/services/digital_media_and_marketing/digital_media_and_marketing_portfolio.php");
            
            // Next Steps
            include($root."/assets/includes/sections/services/digital_media_and_marketing/digital_media_and_marketing_next_steps.php");

    ?>

</div>
    
<?php            

    // HTML 2
    // ****************************************************************************************************************************************
    include($root."/assets/includes/layout/page/html_2.php");
    
?>