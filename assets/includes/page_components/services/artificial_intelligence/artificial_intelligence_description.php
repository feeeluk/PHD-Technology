<div id="ArtificialIntelligenceDescription" class="box--WithPadding item">

    <a id="ArtificialIntelligenceAnchor" class="anchor"></a>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'artificial_intelligence') == true)
            {
                echo "<h1 class='item--Heading'>ARTIFICIAL INTELLIGENCE</h1>";
                echo "<h3 class='item--SubHeading'>(COMING SOON)</h3>";
            }

            else {
                echo "<h1 class='item--Heading'>ARTIFICIAL INTELLIGENCE</h1>";
                echo "<h3 class='item--SubHeading'>(COMING SOON)</h3>";
            }

    ?>
        
    <div id="ArtificialIntelligenceSummaryOfService" class="summaryOfService">
            
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

                    include($path."assets/includes/components/services/button_click_for_details.php");

                echo "</div>";

            }

        if (str_contains($_SERVER['REQUEST_URI'],'artificial_intelligence') == true)
            {

    ?>

    <div id="ArtificialIntelligenceDetailsOfService" class="detailsOfService">

        <p>
            TEST. This paragraph should only be visible in the specific service page, not on the homepage.
        </p>

    </div>

    <?php
            }
    ?>

</div>