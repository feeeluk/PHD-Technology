<div id="ProjectManagementPortfolio" class="box--WithPadding item portfolio">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'project_management') == true)
            {
                echo "<h1 class='item--Heading'>PORTFOLIO</h1>";

                echo "<p class='item--CentreAlignedText'>Examples of work that I have done:</p>";
            }

        elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
            {             
                echo "<h2 class='item--Heading'>PROJECT MANAGEMENT</h2>";    
            }

    ?>

    <div class="item--Flex-SpaceAround">
                
        <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio" class="item--Image-PaddingBottom">

        <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio" class="item--Image-PaddingBottom">

    </div>
        
</div>