<div class="serviceItem">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'data_manipulation') == true)
            {
                echo "<h1>PORTFOLIO</h1>";

                echo "<p>Examples of work that I have done:</p>";
            }

        elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
            {             
                echo "<h2>DATA MANIPULATION</h2>";    
            }

    ?>

    <div class="portfolio">
                
        <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio">

        <img src="/assets/images/other/portfolio.jpg" alt="Default Portfolio">

    </div>
        
</div>