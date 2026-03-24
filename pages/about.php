<?php
    
    //CONFIG
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");      
        
    // PAGE META
    $subTitle = "About";
    $metaDescription = "About";
    $metaKeywords ="Business Analysis, Product Owner, Software Development, Web Development, .Net Development, Project Management, Digital Migrations, Data Maniupulation, Data Management, Artificial Intelligence, Skills Development, Training, Digital Media & Marketing, UI, UX, UI/UX, Proof Of Concept";

?>

<?php include($root."/assets/includes/layout/page_open.php"); ?>

    <div id="About" class="box">

        <?php

            // ABOUT DESCRIPTION
            include($root."/assets/includes/sections/about/about_description.php");

            // BENEFITS
            include($root."/assets/includes/sections/about/about_benefits.php");
            
            // PRICES
            include($root."/assets/includes/sections/about/about_prices.php");

            // NEXT STEPS
            include($root."/assets/includes/sections/about/about_next_steps.php");

        ?>
    
    </div>

<?php include($root."/assets/includes/layout/page_close.php"); ?>