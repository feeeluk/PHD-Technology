<?php
    
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");  
        
    // Set the page title.
    $subTitle = "Artificial Intelligence";

    // Set page meta tags.
    $metaDescription = "Artificial Intelligence";
    $metaKeywords ="Artificial Intelligence";

    // HTML 1
    // ****************************************************************************************************************************************
    include($root."/assets/includes/components/page/html_1.php");

?>

<div id="ArtificialIntelligence" class="box">

    <?php        

        // PAGE CONTENTS HERE

            // Description
            include($root."/assets/includes/page_sections/services/artificial_intelligence/artificial_intelligence_description.php");

            // Benefits
            include($root."/assets/includes/page_sections/services/artificial_intelligence/artificial_intelligence_benefits.php");
            
            // Prices
            include($root."/assets/includes/page_sections/services/artificial_intelligence/artificial_intelligence_prices.php");
            
            // Portfolio
            include($root."/assets/includes/page_sections/services/artificial_intelligence/artificial_intelligence_portfolio.php");
            
            // Next Steps
            include($root."/assets/includes/page_sections/services/artificial_intelligence/artificial_intelligence_next_steps.php");

    ?>

</div>
    
<?php

    // HTML 2
    // ****************************************************************************************************************************************
    include($root."/assets/includes/components/page/html_2.php");
    
?>