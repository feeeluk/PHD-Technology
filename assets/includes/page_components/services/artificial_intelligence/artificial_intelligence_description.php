<div class="serviceItem">

    <a id="ArtificialIntelligence" class="anchor"></a>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'artificial_intelligence') == true)
            {
                echo "<h1>ARTIFICIAL INTELLIGENCE</h1>";
                echo "<h3>(COMING SOON)</h3>";
            }

            else {
                echo "<h1>ARTIFICIAL INTELLIGENCE</h1>";
                echo "<h3>(COMING SOON)</h3>";
            }

    ?>
        
    <div class="summaryOfService">
            
        <img src="/assets/images/services/artificial_intelligence/overview_artificial_intelligence.webp" alt="Artificial Intelligence">
    
        <p>
            Specifically Artificial Intelligence (AI) in the workplace.
        </p>
        
        <p>
            Essentially, the use of computer systems that mimic human intelligence to help businesses automate tasks, analyze data, make decisions, and improve efficiency.
        </p>

        <p>
            Essentially, using AI technology to work faster, smarter, and more accurately.
        </p>

    </div>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'artificial_intelligence') == false)
            {
                $link = "pages/services/artificial_intelligence.php";
                
                 echo "<div class='clickForDetails'>";

                    include($path."assets/includes/components/other/button_click_for_details.php");

                echo "</div>";

            }

        if (str_contains($_SERVER['REQUEST_URI'],'artificial_intelligence') == true)
            {

    ?>

    <div class="detailsOfService">

        <p>
            TEST. This paragraph should only be visible in the specific service page, not on the homepage.
        </p>

    </div>

    <?php
            }
    ?>

</div>