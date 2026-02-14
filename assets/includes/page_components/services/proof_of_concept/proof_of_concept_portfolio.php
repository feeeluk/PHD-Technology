
            

<div class="serviceItem">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'artificial_intelligence') == true)
            {
                echo "<h1>PORTFOLIO</h1>";

                echo "<p>Examples of work that I have done:</p>";
            }

        elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
            {             
                echo "<h2>PROOF OF CONCEPT</h2>";    
            }

    ?>

    <div class="portfolio">
                
        <img src="/assets/images/services/proof_of_concept/portfolio_treedata_v1.webp" alt="Tree Data">

        <img src="/assets/images/services/proof_of_concept/portfolio_portal.webp" alt="Telesales Portal">

        <img src="/assets/images/services/proof_of_concept/portfolio_points_academy.webp" alt="Points Academy Portal">

    </div>
        
</div>