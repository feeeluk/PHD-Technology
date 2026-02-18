<div id="DataManipulationPortfolio" class="box--WithPadding item portflio">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'data_manipulation') == true)
            {
                echo "<h1 class='item--Heading'>PORTFOLIO</h1>";

                echo "<p class='item--CentreAlignedText'>Examples of work that I have done:</p>";
            }

        elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
            {             
                echo "<h2 class='item--Heading'>DATA MANIPULATION</h2>";    
            }

    ?>

    <div class="item--Flex-SpaceAround">
                
        <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio">

        <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio">

    </div>
        
</div>