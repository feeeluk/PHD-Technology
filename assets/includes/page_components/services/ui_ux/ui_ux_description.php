<div id="UiUxDescription" class="box--WithPadding item description">

    <a id="UiUxAnchor" class="anchor"></a>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'ui_ux') == true)
            {
                echo "<h1 class='item--Heading'>UI/UX</h1>";
            }

            else {
                echo "<h1 class='item--Heading'>UI/UX</h1>";
            }

    ?>

    <div id="UiUxSummaryOfService" class="summaryOfService description">

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
                
                echo "<div class='clickForDetails'>";
                
                    include($path."assets/includes/components/services/button_click_for_details.php");

                echo "</div>";

            }

        if (str_contains($_SERVER['REQUEST_URI'],'ui_ux') == true)
            {

    ?>
    
    <div id="UiUxDetailsOfService" class="detailsOfService description">

        <h3>UI/UX with PHD Technology</h3>
        
        <p>
            Whether you simply need advice, or if you would like us to undertake Business Analysis for you, we are here to help.
        </p>
        
    </div>

    <?php
            }
    ?>

</div>