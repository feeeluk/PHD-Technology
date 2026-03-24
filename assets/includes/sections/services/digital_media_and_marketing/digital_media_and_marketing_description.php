<a id="DigitalMediaAndMarketingAnchor" class="anchor">
</a>

<div id="DigitalMediaAndMarketingDescription" class="box--WithPadding item">

    <h1 class='item--Title'>
        DIGITAL MEDIA & MARKETING
    </h1>

    <h2 class='item--SubTitle'>
        (COMING SOON)
    </h2>

    <div id="DigitalMediaAndMarketingSummaryOfService" class="text">

        <img src="/assets/images/services/digital_media_and_marketing/digital_media_and_marketing.webp" alt="Digital media & marketing" class="img--FloatLeft">

        <p>
            Digital Media = Online content (videos, images, articles, ads, etc.).
        </p>

        <p>
            Digital Marketing = Using that content to reach and engage customers through digital platforms.
        </p>

    </div>  

    <?php

        // if (str_contains($_SERVER['REQUEST_URI'],'digital_media_and_marketing') == false)
        //     {
        //         $link = "pages/services/digital_media_and_marketing.php";

        //         echo "<div class='clickForDetails'>";
                
        //             include($root."/assets/includes/layout/button_click_for_details.php");

        //         echo "</div>";

        //     }

        if (str_contains($_SERVER['REQUEST_URI'],'digital_media_and_marketing') == true)
            {

    ?>

    <div id="DigitalMediaAndMarketingDetailsOfService" class="text">
        
        <details class="details">

            <summary class="summary">More Information</summary>

        </details>
    
        <h2 class="item--Heading">
            Digital Media and Marketing with PHD Technology
        </h2>
        
        <p>
            TEST. This paragraph should only be visible in the specific service page, not on the homepage.
        </p>

    </div>

    <?php
            }
    ?>

</div>