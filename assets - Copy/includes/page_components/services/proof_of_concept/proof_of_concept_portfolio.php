<article class="portfolio">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'proof_of_concept') == true)
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

                    echo "<h2 id='proof_of_concept'>PROOF OF CONCEPT</h2>";     
            }

    ?>
                
        <span>
            <img src="/assets/images/services/proof_of_concept/portfolio_treedata_v1.webp" alt="Tree Data">
        </span>

        <span>
            <img src="/assets/images/services/proof_of_concept/portfolio_portal.webp" alt="Telesales Portal">
        </span>

        <span>
            <img src="/assets/images/services/proof_of_concept/portfolio_points_academy.webp" alt="Points Academy Portal">
        </span>
    
    </section>
        
</article>