<div class="serviceItem">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'digital_media_and_marketing') == true)
            {
                echo "<h1>PORTFOLIO</h1>";

                echo "<p>Examples of work that I have done:</p>";
            }

        elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
            {             
                echo "<h2>ARTIFICIAL INTELLIGENCE</h2>";    
            }

    ?>

    <div class="portfolio">
                
        <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio">

        <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio">

    </div>
        
</div>