 /<div id="SoftwareDevelopmentPortfolio" class="box--WithPadding item">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
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
                echo "<h2 class='item--Title'>";
                echo    "SOFTWARE DEVELOPMENT";
                echo "</h2>";    
            }

    ?>

    <div class="portfolio">
            
        <div id=""
             class="text--Portfolio">
        
            <a href="<?=  $points_academy ?>" aria-label="link to Points Academy project" target=”_blank”>
            
                <img src="/assets/images/services/software_development/portfolio_points_academy.webp"
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
        
        <div id=""
             class="text--Portfolio">
        
            <a href="<?=  $commercial_sales_portal ?>" aria-label="link to Commercial Sales Portal project" target=”_blank”>
                
                <img src="/assets/images/services/software_development/portfolio_portal.webp"
                     alt="Telesales Portal"
                    class="portfolioImage--FloatLeft">

            </a>
            
            <h2 class="portfolio--SubSection-Title">
                Commercial Sales Portal
            </h2>

            <p>
                It enables smarter decisions, more efficient operations, reduced costs, and better outcomes. Investing in business analysis is ultimately an investment in clarity, confidence, and long‑term success.
            </p>

        </div>
    
        <div id=""
             class="text--Portfolio">        
        
            <a href="https://philsquiz.vercel.app/" target=”_blank”>
            
                <img src="/assets/images/services/software_development/portfolio_quiz.webp"
                     alt="Quiz"
                     class="portfolioImage--FloatLeft">

            </a>

            <h2 class="portfolio--SubSection-Title">
                Quiz
            </h2>

            <p>
                It enables smarter decisions, more efficient operations, reduced costs, and better outcomes. Investing in business analysis is ultimately an investment in clarity, confidence, and long‑term success.
            </p>

        </div>
    
        <div id=""
             class="text--Portfolio">
        
            <a href="<?=  $snow_compare_shop ?>" aria-label="link to Snow Compare Shop project" target=”_blank”>
            
                <img src="/assets/images/services/software_development/portfolio_snowcompare_shop.webp"
                     alt="Snowcompare Shop"
                     class="portfolioImage--FloatLeft">

            </a>
                        
            <h2 class="portfolio--SubSection-Title">
                Snow Compare Shop
            </h2>

            <p>
                It enables smarter decisions, more efficient operations, reduced costs, and better outcomes. Investing in business analysis is ultimately an investment in clarity, confidence, and long‑term success.
            </p>

        </div>
    
        <div id=""
             class="text--Portfolio">
        
            <a href="<?=  $snow_compare ?>" aria-label="link to Snow Compare project" target=”_blank”>

                <img src="/assets/images/services/software_development/portfolio_snowcompare.webp"
                     alt="Snowcompare"
                     class="portfolioImage--FloatLeft">

            </a>
                        
            <h2 class="portfolio--SubSection-Title">
                Snow Compare
            </h2>

            <p>
                It enables smarter decisions, more efficient operations, reduced costs, and better outcomes. Investing in business analysis is ultimately an investment in clarity, confidence, and long‑term success.
            </p>

        </div>
    
        <div id=""
             class="text--Portfolio">
        
            <a href="<?=  $tree_data ?>" aria-label="link to Tree Data project" target=”_blank”> 
            
                <img src="/assets/images/services/software_development/portfolio_treedata_v1.webp"
                     alt="Tree Data"
                     class="portfolioImage--FloatLeft">

            </a>
                        
            <h2 class="portfolio--SubSection-Title">
                Tree Data
            </h2>

            <p>
                It enables smarter decisions, more efficient operations, reduced costs, and better outcomes. Investing in business analysis is ultimately an investment in clarity, confidence, and long‑term success.
            </p>

        </div>
    
    </div>
        
</div>