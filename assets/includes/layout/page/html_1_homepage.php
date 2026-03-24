<?php

    // IMPORT SITE WIDE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        include($root."/assets/includes/layout/head/site_details.php"); 
        
?>

<!DOCTYPE html>

    <html lang="en">

    <?php

        // HEAD
        // ****************************************************************************************************************************************
        include($root."/assets/includes/layout/head/head.php");
        
    ?>

    <body>

        <?php
            
            // PAGE HEADER & NAVIGATION
            // ****************************************************************************************************************************************
            include($root."/assets/includes/layout/header/header.php");

        ?>

        <div id="PageContainer">

            <?php

                // LINK TO TOP OF THE PAGE
                // ****************************************************************************************************************************************
                include($root."/assets/includes/layout/header/link_to_top_of_the_page.php");

                // INTRODUCTION TO BUSINESS
                // ****************************************************************************************************************************************
                include($root."/assets/includes/sections/homepage/introduction_to_business.php");

            ?>

            <div id="SubContainer">