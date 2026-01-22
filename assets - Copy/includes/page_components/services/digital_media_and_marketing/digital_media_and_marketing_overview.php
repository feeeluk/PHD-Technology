<article class="overview">

    <a id="digital_media_and_marketing" class="anchor"></a>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'digital_media_and_marketing') == true)
            {
                echo "<h1 class='margin_top title'>DIGITAL MEDIA & MARKETING</h1>";
                echo "<h3>(COMING SOON)</h3>";
            }

            else {
                echo "<h1 class='title'>DIGITAL MEDIA & MARKETING</h1>";
                echo "<h3>(COMING SOON)</h3>";
            }

    ?>
    
    <section>

        <div>

            <span class="banner">

                <img src="/assets/images/services/digital_media_and_marketing/overview_digital_media_and_marketing.webp" alt="Digital media & marketing">

            </span>

            <p>
                Digital Media = Online content (videos, images, articles, ads, etc.).
            </p>

            <p>
                Digital Marketing = Using that content to reach and engage customers through digital platforms.
            </p>

            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'digital_media_and_marketing') == false)
                    {
                        $link = "pages/services/digital_media_and_marketing.php";
                        
                        include($path."assets/includes/components/button_click_for_details.php");

                    }

                if (str_contains($_SERVER['REQUEST_URI'],'digital_media_and_marketing') == true)
                    {
            ?>

                    <h4 class="margin_top">Digital Media and Marketing with PHD Technology</h4>
                    
                    <p>
                        TEST. This paragraph should only be visible in the specific service page, not on the homepage.
                    </p>

            <?php
                    }
            ?>
            

        </div>

    </section>

</article>