<div class="serviceItem">

    <a id="UiUx" class="anchor"></a>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'ui_ux') == true)
            {
                echo "<h1>UI/UX</h1>";
            }

            else {
                echo "<h1>UI/UX</h1>";
            }

    ?>

    <div class="summaryOfService">

        <img src="/assets/images/services/ui_ux/overview_ui_ux.webp" alt="UI/UX">
            
        <p>
            UI/UX is the discipline of identifying needs and determining the best solutions to meet those needs.
        </p>
        
        <p>    
            Essentially, it hels organisations understand what they should change, why they should change it, and how to implement that change effectively.
        </p>
        
    </div>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'ui_ux') == false)
            {
                $link = "pages/services/ui_ux.php";
                
                include($path."assets/includes/components/other/button_click_for_details.php");

            }

        if (str_contains($_SERVER['REQUEST_URI'],'ui_ux') == true)
            {

    ?>
    
    <div class="detailsOfService">

        <h3>UI/UX with PHD Technology</h3>
        
        <p>
            Whether you simply need advice, or if you would like us to undertake Business Analysis for you, we are here to help.
        </p>
        
    </div>

    <?php
            }
    ?>

</div>