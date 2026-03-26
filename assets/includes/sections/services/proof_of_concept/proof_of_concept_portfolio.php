 <div id="ProofOfConceptPorftfolio" class="box--WithPadding item">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'proof_of_concept') == true)
            {
                echo "<h1 class='item--Title'>";
                echo    "PORTFOLIO";
                echo "</h1>";

                echo "<h2 class='item--CentreAlignedText portfolio--MarginBottom'>";
                echo    "Here are some examples of our work:";
                echo "</h2>";
            }

        elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
            {             
                echo "<h2 class='item--Title portfolio--MarginBottom'>";
                echo    "PROOF OF CONCEPT";
                echo "</h2>";    
            }

    ?>

    <div class="portfolio">
                
        <div id="PortfolioProofOfConceptTreeData"
             class="text--Portfolio">
        
            <a href="<?=  $tree_data ?>" aria-label="link to Tree Data project" target=”_blank”>
                
                <img src="/assets/images/services/proof_of_concept/portfolio_treedata_v1.webp"
                     alt="Tree Data"
                     class="portfolioImage--FloatLeft">
                     
            </a>

            <h2 class="portfolio--SubSection-Title">
                Tree Data
            </h2>
            
            <p>
                The idea behind this PoC was to test if there was a viable market within my customer's client base for a product that would provide additional, explicit information. 
            </p>

        </div>

        <div id="PortfolioProofOfConceptPointsAcademy"
             class="text--Portfolio">

            <a href="<?=  $points_academy ?>" aria-label="link to Points Academy project" target=”_blank”>
               
                <img src="/assets/images/services/proof_of_concept/portfolio_points_academy.webp"
                     alt="Points Academy"
                     class="portfolioImage--FloatLeft">

            </a>

            <h2 class="portfolio--SubSection-Title">
                Points Academy
            </h2>
                
            <p>
                It enables smarter decisions, more efficient operations, reduced costs, and better outcomes. Investing in business analysis is ultimately an investment in clarity, confidence, and long‑term success.
            </p>

        </div>

        <div id="PortfolioProofOfConceptCommercialSalesPortal"
             class="text--Portfolio">  

            <a href="<?=  $commercial_sales_portal ?>" aria-label="link to Commercial Sales Portal project" target=”_blank”>
                
                <img src="/assets/images/services/proof_of_concept/portfolio_portal.webp"
                     alt="Commercial Sales Portal"
                     class="portfolioImage--FloatLeft">
            
            </a>

            <h2 class="portfolio--SubSection-Title">
                Commercial Sales Portal
            </h2>

            <p>
                It enables smarter decisions, more efficient operations, reduced costs, and better outcomes. Investing in business analysis is ultimately an investment in clarity, confidence, and long‑term success.
            </p>

        </div>

    </div>
        
</div>