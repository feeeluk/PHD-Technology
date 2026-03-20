 <div id="ProofOfConceptPorftfolio" class="box--WithPadding item">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'proof_of_concept') == true)
            {
                echo "<h1 class='item--Title'>PORTFOLIO</h1>";

                echo "<p class='item--CentreAlignedText'>Examples of work that I have done:</p>";
            }

        elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
            {             
                echo "<h2 class='item--Title'>PROOF OF CONCEPT</h2>";    
            }

    ?>

    <div class="portfolio">
                
        <div id=""
             class="text--Portfolio">
            
            <h2 class="title--Portfolio">
                Test
            </h2>
        
            <img src="/assets/images/services/proof_of_concept/portfolio_treedata_v1.webp"
                 alt="Tree Data"
                 class="portfolioImage--FloatLeft">
            
            <p>
                It enables smarter decisions, more efficient operations, reduced costs, and better outcomes. Investing in business analysis is ultimately an investment in clarity, confidence, and long‑term success.
            </p>

        </div>

        <div id=""
             class="text--Portfolio">
            
            <h2 class="title--Portfolio">
                Test
            </h2>

            <img src="/assets/images/services/proof_of_concept/portfolio_portal.webp"
                 alt="Telesales Portal"
                 class="portfolioImage--FloatRight">

            <p>
                It enables smarter decisions, more efficient operations, reduced costs, and better outcomes. Investing in business analysis is ultimately an investment in clarity, confidence, and long‑term success.
            </p>

        </div>

        <div id=""
             class="text--Portfolio">
            
            <h2 class="title--Portfolio">
                Test
            </h2>

            <img src="/assets/images/services/proof_of_concept/portfolio_points_academy.webp"
                 alt="Points Academy Portal"
                 class="portfolioImage--FloatLeft">
                
            <p>
                It enables smarter decisions, more efficient operations, reduced costs, and better outcomes. Investing in business analysis is ultimately an investment in clarity, confidence, and long‑term success.
            </p>

        </div>

    </div>
        
</div>