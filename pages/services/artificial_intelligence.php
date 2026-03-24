<?php
    
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");  
        
    // Set the page title.
    $subTitle = "Artificial Intelligence";

    // Set page meta tags.
    $metaDescription = "Artificial Intelligence";
    $metaKeywords ="Artificial Intelligence";

    // HTML 1
    // ****************************************************************************************************************************************
    include($root."/assets/includes/layout/page/html_1.php");

?>

<div id="ArtificialIntelligence" class="box">

    <?php        

            // Description
            include($root."/assets/includes/sections/services/artificial_intelligence/artificial_intelligence_description.php");

            // Benefits
            include($root."/assets/includes/sections/services/artificial_intelligence/artificial_intelligence_benefits.php");
            
            // Prices
            include($root."/assets/includes/sections/services/artificial_intelligence/artificial_intelligence_prices.php");
            
            // Portfolio
            //include($root."/assets/includes/sections/services/artificial_intelligence/artificial_intelligence_portfolio.php");
            
            // Next Steps
            include($root."/assets/includes/sections/services/artificial_intelligence/artificial_intelligence_next_steps.php");

    ?>

</div>
    
<?php

    // HTML 2
    // ****************************************************************************************************************************************
    include($root."/assets/includes/layout/page/html_2.php");
    
?>