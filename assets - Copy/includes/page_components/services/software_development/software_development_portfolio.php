<article class="portfolio">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
            {
                echo "<h1>PORTFOLIO</h1>";
                    
                echo "<section>";
            
                    echo "<div class='description margin_bottom'>";

                        echo "<p>Examples of work that I have done:</p>";

                    echo "</div>";
            }

        elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
            {             
                echo "<section>";

                    echo "<h2 id='software_development'>SOFTWARE DEVELOPMENT</h2>";     
            }

    ?>
                
        <span>
            <img src="/assets/images/services/software_development/portfolio_points_academy.webp" alt="Ponts Academy">
        </span>

        <span>
            <img src="/assets/images/services/software_development/portfolio_portal.webp" alt="Telesales Portal">
        </span>

        <span>
            <img src="/assets/images/services/software_development/portfolio_quiz.webp" alt="Quiz">
        </span>
        
        <span>
            <img src="/assets/images/services/software_development/portfolio_snowcompare_shop.webp" alt="Snowcompare Shop">
        </span>
        
        <span>
            <img src="/assets/images/services/software_development/portfolio_snowcompare.webp" alt="Snowcompare">
        </span>
        
        <span>
            <img src="/assets/images/services/software_development/portfolio_treedata_v1.webp" alt="Tree Data">
        </span>
    
    </section>
        
</article>