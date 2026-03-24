<?php
    
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");             

    // set the page title
    $subTitle = "UI/UX";

    // Set page meta tags.
    $metaDescription = "UI/UX";
    $metaKeywords ="UI/UX, User Interface, User Experience";

    // HTML 1
    // ****************************************************************************************************************************************
    include($root."/assets/includes/layout/page/html_1.php");

?>

<div id="UiUx" class="box">

    <?php

            // Description
            include($root."/assets/includes/sections/services/ui_ux/ui_ux_description.php");

            // Benefits
            include($root."/assets/includes/sections/services/ui_ux/ui_ux_benefits.php");

            // Prices
            include($root."/assets/includes/sections/services/ui_ux/ui_ux_prices.php");

            // Portfolio
            //include($root."/assets/includes/sections/services/ui_ux/ui_ux_portfolio.php");
            
            // Next Steps
            include($root."/assets/includes/sections/services/ui_ux/ui_ux_next_steps.php");

    ?>

</div>
    
<?php          

    // HTML 2
    // ****************************************************************************************************************************************
    include($root."/assets/includes/layout/page/html_2.php");
    
?>