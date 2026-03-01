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
        
<div class="box--WithPadding item text">

    <h1 class="item--Title">Legal</h1>

    <p>
        PDH Technology is a trading name used by Philip Henning as a sole trader, trading as PDH Technology.
        <br>
        Philip Henning trading as PDH Technology.
    </p>

    <h2>VAT</h2>

        <p>
            No VAT is payable.
        </p>

    <h2>Insurance</h2>

        <p>
            We do not have any insurance as yet.
        </p>

    <h2>Payment Terms</h2>

        <p>
            To be worked out.
        </p>

</div>

<?php
        
    // HTML 2
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_2.php");
    
?>