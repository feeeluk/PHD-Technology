<?php
    
    // CONFIG
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");  
        
    // PAGE META
    $subTitle = "Artificial Intelligence";
    $metaDescription = "Artificial Intelligence";
    $metaKeywords ="Artificial Intelligence";

?>

<?php include($root."/assets/includes/layout/page_open.php"); ?>

<div id="ArtificialIntelligence" class="box">

    <?php        

            // Description
            include($root."/assets/includes/sections/services/artificial_intelligence/artificial_intelligence_description.php");

            // Benefits
            //include($root."/assets/includes/sections/services/artificial_intelligence/artificial_intelligence_benefits.php");
            
            // Prices
            include($root."/assets/includes/sections/services/artificial_intelligence/artificial_intelligence_prices.php");
            
            // Portfolio
            //include($root."/assets/includes/sections/services/artificial_intelligence/artificial_intelligence_portfolio.php");
            
            // Next Steps
            include($root."/assets/includes/sections/services/artificial_intelligence/artificial_intelligence_next_steps.php");

    ?>

</div>
    
<?php include($root."/assets/includes/layout/page_close.php"); ?>