<?php
    
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");       
        
    // Set the page title.
    $subTitle = "Software Development";

    // Set page meta tags.
    $metaDescription = "Software Development";
    $metaKeywords ="Software Development, Web, Web Development, .Net, .Net Development, Software, HTML, CSS, PHP, MySQL, Hosting Help, Domain Registration Help, JavaScript, Next.js, React, C#";

    // HTML 1
    // ****************************************************************************************************************************************
    include($root."/assets/includes/components/page/html_1.php");

?>

<div id="SoftwareDevelopment" class="box">

    <?php    

            // Description
            include($root."/assets/includes/page_sections/services/software_development/software_development_description.php");

            // Benefits
            // include($root."/assets/includes/page_sections/services/software_development/software_development_benefits.php");

            // Prices
            include($root."/assets/includes/page_sections/services/software_development/software_development_prices.php");
            
            // Portfolio
            include($root."/assets/includes/page_sections/services/software_development/software_development_portfolio.php"); 
            
            // Next Steps
            include($root."/assets/includes/page_sections/services/software_development/software_development_next_steps.php");

    ?>

</div>
    
<?php    

    // HTML 2
    // ****************************************************************************************************************************************
    include($root."/assets/includes/components/page/html_2.php");
    
?>