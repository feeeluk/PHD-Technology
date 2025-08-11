<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        
        //    ./ = page is located in the root directory
        //    ../ = page is located one folder up
        //    ../../ = page is located two folders up, etc

        // set the site root folder in relation to this page
        $path = "../";        
        
        // set the page title
        $subTitle = "About";

    // HEADER
    // **************************************************************************************************************************************** 
        include($path."assets/includes/components/header.php");

    // MAIN PAGE
    // _________________________________________________________________________________________________________________________________________
        
?>

<article id="about">

    <h1 class="margin_top">ABOUT</h1>

    <section>
     
        <div>
        
            <h3>Who am I?</h3>
            <p>
                test
            </p>

            <h3>What I can help you with</h3>

                <p>

                </p>

            <h3></h3>

                <p>

                </p>
        
        </div>

    </section>

</article>


<?php

        // BENEFITS
        include($path."assets/includes/page_components/about/benefits.php");
        
        // PRICES
        include($path."assets/includes/page_components/about/prices.php");

        // NEXT STEPS
        include($path."assets/includes/page_components/about/next_steps.php");

    // FOOTER
    // ****************************************************************************************************************************************
        include($path."assets/includes/components/footer.php");

?>