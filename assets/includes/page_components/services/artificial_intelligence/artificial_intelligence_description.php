<a id="ArtificialIntelligenceAnchor" class="anchor"></a>

<div id="ArtificialIntelligenceDescription" class="box--WithPadding item">

    <h1 class='item--Title'>ARTIFICIAL INTELLIGENCE</h1>
    <h3 class='item--SubTitle'>(COMING SOON)</h3>
        
    <div id="ArtificialIntelligenceSummaryOfService" class="text">
            
        <img src="/assets/images/services/artificial_intelligence/overview_artificial_intelligence.webp" alt="Artificial Intelligence" class="text--FloatLeft" />
    
        <p>
            Relating specifically to AI in the workplace.
        </p>
        
        <p>
            AI is essentially a computer system that mimics human intelligence, and can help businesses automate tasks, analyze data, make decisions, and improve efficiency.
        </p>

        <p>
            We can help YOU leverage AI technology to work faster, smarter, and more accurately! 
        </p>


        </details>

        <details class="details">

            <summary class="summary">More Information</summary>

        </details>

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

    <div id="ArtificialIntelligenceDetailsOfService" class="text">
    
        <h3 class="item--Heading">AI with PDH Technology</h3>
    
        <p>
            TEST. This paragraph should only be visible in the specific service page, not on the homepage.
        </p>

    </div>

    <?php
            }
    ?>

</div>