<article class="portfolio">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'skills_development_and_training') == true)
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

                    echo "<h2 id='skills_development_and_training'>SKILLS DEVELOPMENT & TRAINING</h2>";     
            }

    ?>
                
        <span>
            <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio">
        </span>

        <span>
            <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio">
        </span>
    
    </section>
        
</article>