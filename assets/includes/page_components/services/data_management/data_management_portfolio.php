<article class="portfolio">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'data_management') == true)
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

                    echo "<h2 id='data_management'>DATA MANAGEMENT</h2>";     
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