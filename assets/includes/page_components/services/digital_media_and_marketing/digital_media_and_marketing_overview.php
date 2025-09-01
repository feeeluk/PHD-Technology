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
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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