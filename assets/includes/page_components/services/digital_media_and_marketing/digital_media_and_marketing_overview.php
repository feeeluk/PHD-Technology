<?php

    if (str_contains($_SERVER['REQUEST_URI'],'digital_media_and_marketing') == true)
        {
            echo "<article class='overview'>";
        }

        else {
            echo "<article class='overview'>";
        }

?>
        
    <h1 id="digital_media_and_marketing">DIGITAL MEDIA & MARKETING</h1>
    <h3>(COMING SOON)</h3>

    <section>

        <div>

            <span class="banner">

                <img src="/assets/images/services/digital_media_and_marketing/overview_digital_media_and_marketing.webp" alt="Digital media & marketing">

            </span>

            <span>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                
            </span>

            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'digital_media_and_marketing') == false)
                    {
                        echo "<a href='/pages/services/digital_media_and_marketing.php'>";

                            echo "<span class='more_information'>";

                                echo "More Information";

                            echo "</span>";

                        echo "</a>";

                    }

            ?>

        </div>

    </section>

</article>