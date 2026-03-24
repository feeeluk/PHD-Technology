<?php
    
    // CONFIG
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");             

    // PAGE META
    $subTitle = "UI/UX";
    $metaDescription = "UI/UX";
    $metaKeywords ="UI/UX, User Interface, User Experience";

?>

<?php include($root."/assets/includes/layout/page_open.php"); ?>

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
    
<?php include($root."/assets/includes/layout/page_close.php"); ?>