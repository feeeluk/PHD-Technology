<?php

    // IMPORT SITE WIDE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        include($path."assets/includes/components/head/site_details.php"); 
        
?>

<!DOCTYPE html>

    <html lang="en">

    <?php

        // HEAD
        // ****************************************************************************************************************************************
        include($path."assets/includes/components/head/head.php");
        
    ?>

    <body>

        <?php
            
            // PAGE HEADER & NAVIGATION
            // ****************************************************************************************************************************************
            include($path."assets/includes/components/page_header/page_header.php");

        ?>

        <div id="PageContainer">

            <?php

                // LINK TO TOP OF THE PAGE
                // ****************************************************************************************************************************************
                include($path."assets/includes/components/page_header/link_to_top_of_the_page.php");

                // INTRODUCTION
                // ****************************************************************************************************************************************
                include($path."assets/includes/page_components/home/introduction.php");

            ?>

            <div id="SubContainer">