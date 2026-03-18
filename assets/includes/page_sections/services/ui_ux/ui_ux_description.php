<a id="UiUxAnchor" class="anchor">
</a>

<div id="UiUxDescription" class="box--WithPadding item">

    <h1 class='item--Title'>
        UI/UX
    </h1>
    
    <div id="UiUxSummaryOfService" class="text">

        <img src="/assets/images/services/ui_ux/ui_ux.webp" alt="UI/UX" class="text--FloatLeft">
        
        <p>
            UI/UX focuses on making digital products easier to use and more enjoyable for the people who rely on them. UI (User Interface) covers the visual layout and controls, while UX (User Experience) looks at how smoothly someone can complete a task. Together, they help ensure websites, apps, and systems feel clear, intuitive, and frustration‑free.
        </p>
        
    </div>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'ui_ux') == false)
            {
                $link = "pages/services/ui_ux.php";
                $aria = "Link to UI/UX services page";
                
                echo "<div class='clickForDetails'>";
                
                    include($root."/assets/includes/components/services/button_click_for_details.php");

                echo "</div>";

            }

        if (str_contains($_SERVER['REQUEST_URI'],'ui_ux') == true)
            {

    ?>
    
    <div id="UiUxDetailsOfService" class="text">
    
        <h2 class="item--Heading">
            UI/UX with PHD Technology
        </h2>
        
        <p>
            We bring practical, real‑world design thinking to your digital projects. We don’t claim to be UI/UX specialists — instead, we offer grounded, accessible guidance that helps businesses improve clarity, usability, and flow.
        </p>
        
        <p>
            If your team needs help making a system easier to use or understanding what users actually need, we can support you with straightforward, sensible improvements.
        </p>
        
    </div>

    <?php
            }
    ?>

</div>