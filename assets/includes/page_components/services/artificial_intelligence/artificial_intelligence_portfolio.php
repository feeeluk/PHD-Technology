<div id="ArtificialIntelligencePortfolio" class="box--WithPadding item">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'artificial_intelligence') == true)
            {
                echo "<h1 class='item--Heading'>PORTFOLIO</h1>";

                echo "<p class='item--CentreAlignedText'>Examples of work that I have done:</p>";
            }

        elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
            {             
                echo "<h2 class='item--Heading'>ARTIFICIAL INTELLIGENCE</h2>";    
            }

    ?>

    <div class="portfolio">
                
        <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio" class="portfolio--Image-PaddingBottom">

        <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio" class="portfolio--Image-PaddingBottom">

    </div>
        
</div>