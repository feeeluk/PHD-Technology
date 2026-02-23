<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        
        // set the site root folder in relation to this page
        $path = "../";

            //    ./ = page is located in the root directory
            //    ../ = page is located one folder up
            //    ../../ = page is located two folders up, etc       
        
        // set the page title
        $subTitle = "Legal";


    // HTML 1 (Homepage version)
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_1.php");
    

        // PAGE CONTENTS HERE
     
        ?>
        
            <div>

                <h1>Legal</h1>
            
                <p>
                    PDH Technology is a trading name used by Philip Henning as a sole trader, trading as PDH Technology.
                    <br>
                    Philip Henning trading as PDH Technology.
                </p>

                <h3>VAT</h3>

                    <p>
                        No VAT is payable.
                    </p>

                <h3>Insurance</h3>

                    <p>
                        We do not have any insurance as yet.
                    </p>

                <h3>Payment Terms</h3>

                    <p>
                        To be worked out.
                    </p>

            </div>

        <?php
        
    // HTML 2
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_2.php");
    
?>