<article class="portfolio">

<?php

    if (str_contains($_SERVER['REQUEST_URI'],'digital_media_and_marketing') == true)
        {
                echo "<h1>PORTFOLIO</h1>";
                    
                echo "<section class='description'>";
            
                    echo "<h2>Examples of work that we have done for our clients:</h2>";

                    echo "<div>";
        }

    elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
        {             
                echo "<section>";

                    echo "<h2 id='digital_media_and_marketing'>DIGITAL MEDIA & MARKETING</h2>";
                
                    echo "<div>";
        }

?> 
                
            <span>
                <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio">
            </span>

            <span>
                <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio">
            </span>

            <span>
                <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio">
            </span>

        </div>
    
    </section>
        
</article>