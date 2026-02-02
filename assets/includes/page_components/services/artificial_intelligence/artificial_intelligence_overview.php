<article class="overview">

    <a id="artificial_intelligence" class="anchor"></a>

<?php

    if (str_contains($_SERVER['REQUEST_URI'],'artificial_intelligence') == true)
        {
            echo "<h1 class='title margin_top'>ARTIFICIAL INTELLIGENCE</h1>";
            echo "<h3>(COMING SOON)</h3>";
        }

        else {
            echo "<h1 class='title margin_top'>ARTIFICIAL INTELLIGENCE</h1>";
            echo "<h3>(COMING SOON)</h3>";
        }

?>
        
    <section>

        <div>

            <span class="banner">
                <img src="/assets/images/services/artificial_intelligence/overview_artificial_intelligence.webp" alt="Artificial intelligence">
            </span>
                
                <p>
                    Specifically Artificial Intelligence (AI) in the workplace.
                    <br>
                    Essentially, the use of computer systems that mimic human intelligence to help businesses automate tasks, analyze data, make decisions, and improve efficiency.

                <p>
                    Essentially, using AI technology to work faster, smarter, and more accurately.
                </p>


            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'artificial_intelligence') == false)
                    {
                        $link = "pages/services/artificial_intelligence.php";
                        
                        include($path."assets/includes/components/button_click_for_details.php");

                    }

                if (str_contains($_SERVER['REQUEST_URI'],'artificial_intelligence') == true)
                    {

            ?>

            <p>
                TEST. This paragraph should only be visible in the specific service page, not on the homepage.
            </p>

            <?php
                    }
            ?>  
  
        </div>

    </section>

</article>