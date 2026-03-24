<?php
    
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");      
        
    // Set the page title.
    $subTitle = "Digital Transformation";

    // Set page meta tags.
    $metaDescription = "Digital Transformation";
    $metaKeywords ="Digital Transformation";

    // HTML 1
    // ****************************************************************************************************************************************
    include($root."/assets/includes/layout/page/html_1.php");

?>

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
    
<?php

    // HTML 2
    // ****************************************************************************************************************************************
    include($root."/assets/includes/layout/page/html_2.php");
    
?>