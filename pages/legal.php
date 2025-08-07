<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        
        //    ./ = page is located in the root directory
        //    ../ = page is located one folder up
        //    ../../ = page is located two folders up, etc

        // set the site root folder in relation to this page
        $path = "../";        
        
        // set the page title
        $subTitle = "Legal";

    // HEADER
    // **************************************************************************************************************************************** 
        include($path."assets/includes/sections/header.php");

    // MAIN PAGE
    // _________________________________________________________________________________________________________________________________________
        
?>

<article id="legal">

    <h1 class="margin_top">Legal</h1>

    <section>
     
        <div>
        
            <p>
                PHD Technology is a trading name used by Philip Henning (Philip Henning trading as PHD Technology).
                <br>
                Philip Henning is a sole trader.
            </p>

            <h3>VAT</h3>

                <p>
                    No VAT is payable?
                </p>

            <h3>Insurance</h3>

                <p>
                    We do not have any insurance yet.
                </p>

            <h3>Payment Terms</h3>

                <p>
                    To be worked out.
                </p>

            <h3></h3>

                <p>

                </p>

            <h3></h3>

                <p>

                </p>
        
        </div>

    </section>

</article>


<?php

// FOOTER
    // ****************************************************************************************************************************************
        include($path."assets/includes/sections/footer.php");

?>