<div id="ArtificialIntelligencePortfolio" class="box--WithPadding item portflio">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'artificial_intelligence') == true)
            {
                echo "<h1 class='item--Heading'>PORTFOLIO</h1>";

                echo "<p>Examples of work that I have done:</p>";
            }

        elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
            {             
                echo "<h2 class='item--Heading'>ARTIFICIAL INTELLIGENCE</h2>";    
            }

    ?>

    <div class="item--Flex-SpaceAround">
                
        <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio" class="item--Image-PaddingBottom">

        <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio" class="item--Image-PaddingBottom">

    </div>
        
</div>