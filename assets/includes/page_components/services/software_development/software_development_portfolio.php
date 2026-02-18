<div id="SoftwareDevelopmentPortfolio" class="box--WithPadding item portflio">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
            {
                echo "<h1 class='item--Heading'>PORTFOLIO</h1>";

                echo "<p class='item--CentreAlignedText'>Examples of work that I have done:</p>";
            }

        elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
            {             
                echo "<h2 class='item--Heading'>SOFTWARE DEVELOPMENT</h2>";    
            }

    ?>

    <div class="item--Flex-SpaceAround">
            
        <img src="/assets/images/services/software_development/portfolio_points_academy.webp" alt="Ponts Academy" class="item--Image-PaddingBottom">
        
        <img src="/assets/images/services/software_development/portfolio_portal.webp" alt="Telesales Portal" class="item--Image-PaddingBottom">
    
        <img src="/assets/images/services/software_development/portfolio_quiz.webp" alt="Quiz" class="item--Image-PaddingBottom">
    
        <img src="/assets/images/services/software_development/portfolio_snowcompare_shop.webp" alt="Snowcompare Shop" class="item--Image-PaddingBottom">
    
        <img src="/assets/images/services/software_development/portfolio_snowcompare.webp" alt="Snowcompare" class="item--Image-PaddingBottom">
    
        <img src="/assets/images/services/software_development/portfolio_treedata_v1.webp" alt="Tree Data" class="item--Image-PaddingBottom">
    
    </div>
        
</div>