<a id="DigitalTransformationAnchor" class="anchor"></a>

<div id="DigitalTransformationDescription" class="box--WithPadding item">

    <h1 class='item--Title'>DIGITAL TRANSFORMATION</h1>

    <div id="DigitalTransformationSummaryOfService" class="text ">

        <img src="/assets/images/services/digital_transformation/digital_transformation.webp" alt="Digital transformation" class="text--FloatLeft">

        <p>
            A digital transformation in this context focuses on a single part of a business rather than the organisation as a whole.
        </p>
        
        <p>
            It targets processes or services that have become slow, manual, or paper‑heavy, and rebuilds them using digital tools that make the work faster, clearer, and easier to manage.
        </p>
        
        <p>
            By modernising one defined area, the business gains quick, meaningful improvements without wider disruption. The result is a streamlined, scalable workflow that supports staff more effectively and gives customers a smoother, more reliable experience.
        </p>
        

    </div>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'digital_transformation') == false)
            {
                $link = "pages/services/digital_transformation.php";
                $aria = "Link to Digital Transformation services page";
                
                echo "<div class='clickForDetails'>";

                    include($path."assets/includes/components/services/button_click_for_details.php");

                echo "</div>";

            }

        if (str_contains($_SERVER['REQUEST_URI'],'digital_transformation') == true)
            {

    ?>

    <div id="DigitalTransformationDetailsOfService" class="text">
  
        <h2 class="item--Heading">Digital Transformation with PHD Technology</h2>
        
        <p>
            A digital transformation with PDH Technology strengthens how a business operates by modernising the processes, services, or operational areas that will benefit most from change.
        </p>

        <p>
            The scope can be small or wide‑ranging, depending on what the organisation needs.
            <br>
            The focus is on replacing slow, manual, or paper‑based steps with clear, efficient digital tools that improve accuracy, speed, and visibility. This approach helps staff work more effectively and gives customers a smoother, more reliable experience.
        </p>
        
        <p>
            Whether it involves one workflow or several interconnected functions, the aim is to create practical, meaningful improvements that form a strong foundation for future growth
        </p>

    </div>

    <?php
            }
    ?>
            
</div>