<div id="UiUxPortfolio" class="box--WithPadding item">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'ui_ux') == true)
            {
                echo "<h1 class='item--Title'>PORTFOLIO</h1>";

                echo "<p class='item--CentreAlignedText'>Examples of work that I have done:</p>";
            }

        elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
            {             
                echo "<h2 class='item--Title'>UI/UX</h2>";    
            }

    ?>

    <div class="portfolio">
                
        <img src="/assets/images/other/portfolio/portfolio_placeholder.jpg" alt="Default Portfolio">

        <img src="/assets/images/other/portfolio/portfolio_placeholder.jpg" alt="Default Portfolio">

    </div>
        
</div>