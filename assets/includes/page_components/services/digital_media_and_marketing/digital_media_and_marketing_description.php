<div id="DigitalMediaAndMarketingDescription" class="box--WithPadding item">

    <a id="DigitalMediaAndMarketingAnchor" class="anchor"></a>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'digital_media_and_marketing') == true)
            {
                echo "<h1 class='item--Heading'>DIGITAL MEDIA & MARKETING</h1>";
                echo "<h3 class='item--SubHeading'>(COMING SOON)</h3>";
            }

        else {
            echo "<h1 class='item--Heading'>DIGITAL MEDIA & MARKETING</h1>";
            echo "<h3 class='item--SubHeading'>(COMING SOON)</h3>";
        }

    ?>

    <div id="DigitalMediaAndMarketingSummaryOfService" class="summaryOfService">

        <img src="/assets/images/services/digital_media_and_marketing/overview_digital_media_and_marketing.webp" alt="Digital media & marketing">

        <p>
            Digital Media = Online content (videos, images, articles, ads, etc.).
        </p>

        <p>
            Digital Marketing = Using that content to reach and engage customers through digital platforms.
        </p>

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

    <div id="DigitalMediaAndMarketingDetailsOfService" class="detailsOfService">

        <h3>Digital Media and Marketing with PHD Technology</h3>
        
        <p>
            TEST. This paragraph should only be visible in the specific service page, not on the homepage.
        </p>

    </div>

    <?php
            }
    ?>

</div>