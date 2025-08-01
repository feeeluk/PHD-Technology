<article class="overview">

<?php

    if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
        {
            echo "<h1 id='software_development' class='margin_top'>SOFTWARE DEVELOPMENT</h1>";
        }

        else {
            echo "<h1 id='software_development'>SOFTWARE DEVELOPMENT</h1>";
        }

?>

    <section>

        <div class="margin_bottom">

            <span class="banner_column">

                <img src="/assets/images/services/software_development/overview_dot_net_development.webp" alt=".NET devlopment">

            </span>

            <span>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>

            </span>

            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'software_development') == false)
                    {
                        include($path."assets/includes/page_components/other/button_more_information.php");

                    }

            ?>

        </div>

        <div>

            <span class="banner_column">

                <img src="/assets/images/services/software_development/overview_web_development.webp" alt="Web development">

            </span>

            <span>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>

            </span>
            
            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'software_development') == false)
                    {
                        echo "<a href='/pages/services/software_development.php'>";

                            echo "<span class='more_information'>";

                                echo "More Information";

                            echo "</span>";

                        echo "</a>";

                    }

            ?>
            
        </div>
    
    </section>

</article>