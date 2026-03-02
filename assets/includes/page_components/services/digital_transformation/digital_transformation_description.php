<a id="DigitalTransformationAnchor" class="anchor"></a>

<div id="DigitalTransformationDescription" class="box--WithPadding item">

    <h1 class='item--Title'>DIGITAL TRANSFORMATION</h1>

    <div id="DigitalTransformationSummaryOfService" class="text ">

        <img src="/assets/images/services/digital_transformation/overview_digital_transformation.webp" alt="Digital transformation" class="text--FloatLeft">

        <p>
            Digital transformation is the discipline of planning, organizing, and overseeing work to achieve specific goals within a defined timeframe, budget, and scope. It involves applying knowledge, skills, tools, and techniques to ensure a project is completed successfully.
        </p>

    </div>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'digital_transformation') == false)
            {
                $link = "pages/services/digital_transformation.php";
                
                echo "<div class='clickForDetails'>";

                    include($path."assets/includes/components/services/button_click_for_details.php");

                echo "</div>";

            }

        if (str_contains($_SERVER['REQUEST_URI'],'digital_transformation') == true)
            {

    ?>

    <div id="DigitalTransformationDetailsOfService" class="text">
        
        <details class="details">

            <summary class="summary">More Information</summary>

        </details>
  
        <h2 class="item--Heading">Digital Transformation with PHD Technology</h2>
        
        <p>
            TEST. This paragraph should only be visible in the specific service page, not on the homepage.
        </p>

    </div>

    <?php
            }
    ?>
            
</div>