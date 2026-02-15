<div class="box serviceItem">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
            {
                echo "<h1>PORTFOLIO</h1>";

                echo "<p>Examples of work that I have done:</p>";
            }

        elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
            {             
                echo "<h2>UI/UX</h2>";    
            }

    ?>

    <div class="portfolio">
            
        <img src="/assets/images/services/software_development/portfolio_points_academy.webp" alt="Ponts Academy">
        
        <img src="/assets/images/services/software_development/portfolio_portal.webp" alt="Telesales Portal">
    
        <img src="/assets/images/services/software_development/portfolio_quiz.webp" alt="Quiz">
    
        <img src="/assets/images/services/software_development/portfolio_snowcompare_shop.webp" alt="Snowcompare Shop">
    
        <img src="/assets/images/services/software_development/portfolio_snowcompare.webp" alt="Snowcompare">
    
        <img src="/assets/images/services/software_development/portfolio_treedata_v1.webp" alt="Tree Data">
    
    </div>
        
</div>