<div id="UiUxPortfolio" class="box--WithPadding item">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'ui_ux') == true)
            {
                echo "<h1 class='item--Heading'>PORTFOLIO</h1>";

                echo "<p class='item--CentreAlignedText'>Examples of work that I have done:</p>";
            }

        elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
            {             
                echo "<h2 class='item--Heading'>UI/UX</h2>";    
            }

    ?>

    <div class="item--Flex-SpaceAround">
                
        <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio" class="item--Image-PaddingBottom">

        <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio" class="item--Image-PaddingBottom">

    </div>
        
</div>