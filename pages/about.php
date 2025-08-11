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

    <h1 class="margin_top">About</h1>

    <section>
     
        <div>
        
            <p>
                test
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
        include($path."assets/includes/components/footer.php");

?>