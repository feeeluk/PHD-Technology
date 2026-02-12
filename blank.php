<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
    
        // set the site root folder in relation to this page
        $path = "./";

            //    ./ = page is located in the root directory
            //    ../ = page is located one folder up
            //    ../../ = page is located two folders up, etc
        
        // set the page title
        $subTitle = "";

    // HEAD
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/head/head.php");
    
?>

    <body>

        <?php
            
            // HEADER
            // ****************************************************************************************************************************************
            include($path."assets/includes/components/header/header.php");

            // LINK TO TOP OF THE PAGE
            // ****************************************************************************************************************************************
            //include($path."assets/includes/components/header/link_to_top_of_the_page.php");

        ?>

        <div class="pageContainer">

            <div class="subContainer">

                <?php

                ?>

            </div><!-- end subContainer -->

            <?php

                // FOOTER
                // ****************************************************************************************************************************************
                include($path."assets/includes/components/footer/footer.php");

            ?>
        
        </div><!-- end pageContainer -->

    </body>

</html>