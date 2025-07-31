<article class="overview">

<?php

    if (str_contains($_SERVER['REQUEST_URI'],'artificial_intelligence') == true)
        {
            echo "<h1 id='artificial_intelligence' class='margin_top'>ARTIFICIAL INTELLIGENCE</h1>";
            echo "<h3>(COMING SOON)</h3>";
        }

        else {
            echo "<h1 id='artificial_intelligence'>ARTIFICIAL INTELLIGENCE</h1>";
            echo "<h3>(COMING SOON)</h3>";
        }

?>
        
    <section>

        <div>

            <span class="banner">
                <img src="/assets/images/services/artificial_intelligence/overview_artificial_intelligence.webp" alt="Artificial intelligence">
            </span>
                
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>

            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'artificial_intelligence') == false)
                    {
                        echo "<a href='/pages/services/artificial_intelligence.php'>";

                            echo "<span class='more_information'>";

                                echo "More Information";

                            echo "</span>";

                        echo "</a>";

                    }

            ?>  
  
        </div>

    </section>

</article>