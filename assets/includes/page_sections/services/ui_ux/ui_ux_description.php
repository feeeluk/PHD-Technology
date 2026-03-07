<a id="UiUxAnchor" class="anchor">
</a>

<div id="UiUxDescription" class="box--WithPadding item">

    <h1 class='item--Title'>
        UI/UX
    </h1>
    
    <div id="UiUxSummaryOfService" class="text">

        <img src="/assets/images/services/ui_ux/ui_ux.webp" alt="UI/UX" class="text--FloatLeft">
        
        <p>
            Test.
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
    
    <div id="UiUxDetailsOfService" class="text">

        <details class="details">

            <summary class="summary">More Information</summary>

        </details>
    
        <h2 class="item--Heading">
            UI/UX with PHD Technology
        </h2>
        
        <p>
            Whether you simply need advice, or if you would like us to undertake Business Analysis for you, we are here to help.
        </p>
        
    </div>

    <?php
            }
    ?>

</div>