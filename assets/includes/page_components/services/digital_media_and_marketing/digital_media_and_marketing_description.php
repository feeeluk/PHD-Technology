<a id="DigitalMediaAndMarketingAnchor" class="anchor"></a>

<div id="DigitalMediaAndMarketingDescription" class="box--WithPadding item">

    <h1 class='item--Title'>DIGITAL MEDIA & MARKETING</h1>
    <h3 class='item--SubTitle'>(COMING SOON)</h3>

    <div id="DigitalMediaAndMarketingSummaryOfService" class="text">

        <img src="/assets/images/services/digital_media_and_marketing/overview_digital_media_and_marketing.webp" alt="Digital media & marketing" class="text--FloatLeft" />

        <p>
            Digital Media = Online content (videos, images, articles, ads, etc.).
        </p>

        <p>
            Digital Marketing = Using that content to reach and engage customers through digital platforms.
        </p>

        </details>

        <details class="details">

            <summary class="summary">More Information</summary>

        </details>

    </div>  

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'digital_media_and_marketing') == false)
            {
                $link = "pages/services/digital_media_and_marketing.php";

                echo "<div class='clickForDetails'>";
                
                    include($path."assets/includes/components/services/button_click_for_details.php");

                echo "</div>";

            }

        if (str_contains($_SERVER['REQUEST_URI'],'digital_media_and_marketing') == true)
            {

    ?>

    <div id="DigitalMediaAndMarketingDetailsOfService" class="text">
    
        <h3 class="item--Heading">Digital Media and Marketing with PHD Technology</h3>
        
        <p>
            TEST. This paragraph should only be visible in the specific service page, not on the homepage.
        </p>

    </div>

    <?php
            }
    ?>

</div>