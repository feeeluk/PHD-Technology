<?php
    
    // CONFIG
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");       
        
    // PAGE META
    $subTitle = "Software Development";
    $metaDescription = "Software Development";
    $metaKeywords ="Software Development, Web, Web Development, .Net, .Net Development, Software, HTML, CSS, PHP, MySQL, Hosting Help, Domain Registration Help, JavaScript, Next.js, React, C#";

?>

<?php include($root."/assets/includes/layout/page_open.php"); ?>

    <div id="SoftwareDevelopment" class="box">

        <?php    

            // Description
            include($root."/assets/includes/sections/services/software_development/software_development_description.php");

            // Benefits
            // include($root."/assets/includes/sections/services/software_development/software_development_benefits.php");

            // Prices
            include($root."/assets/includes/sections/services/software_development/software_development_prices.php");
            
            // Portfolio
            include($root."/assets/includes/sections/services/software_development/software_development_portfolio.php"); 
            
            // Next Steps
            include($root."/assets/includes/sections/services/software_development/software_development_next_steps.php");

        ?>

    </div>
    
<?php include($root."/assets/includes/layout/page_close.php"); ?>