 <div id="SoftwareDevelopmentPortfolio"
      class="box--WithPadding item">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
            {
                echo "<h1 class='item--Title portfolio--Section-Title-NoBottomMargin'>";
                echo    "PORTFOLIO";
                echo "</h1>";

                echo "<h2 class='item--CentreAlignedText portfolio--Section-SubTitle'>";
                echo    "Here are some examples of our work:";
                echo "</h2>";
            }

        elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
            {             
                echo "<h2 class='item--Title portfolio--Section-Title-MoreBottomMargin'>";
                echo    "SOFTWARE DEVELOPMENT";
                echo "</h2>";    
            }

    ?>

    <div class="portfolio">
            
        <div id="SoftwareDevelopmentPortfolio-Quiz"
             class="text--Portfolio">        
        
            <a href="https://quiz.philiphenning.com/"
               aria-label="link to Quiz project"
               target=”_blank”>
            
                <img src="/assets/images/services/software_development/portfolio_quiz.webp"
                     alt="Quiz"
                     class="portfolioImage--FloatLeft">

            </a>

            <h2 class="portfolio--SubSection-Title">
                Quiz
            </h2>

            <p>
                Built using Next.js (hosted on Vercel), with a PostGRES database (hosted on Supabase). Authentication via Clerk.
            </p>

            <p>
                You will need to register for a Clerk account to play.
            </p>
            
            <!-- <div class="clear">

                <details>

                    <summary class="portfolio--Summary">Test</summary>

                    <p>
                        Test
                    </p>

                </details>

            </div> -->

        </div>

            <div id="SoftwareDevelopmentPortfolio-PhilHenning"
                 class="text--Portfolio">        
        
            <a href="https://philiphenning.com/"
               aria-label="link to PhilHenning project"
               target=”_blank”>
            
                <img src="/assets/images/services/software_development/portfolio_philhenning.webp"
                     alt="PhilHenning project"
                     class="portfolioImage--FloatLeft">

            </a>

            <h2 class="portfolio--SubSection-Title">
                Philhenning V2
            </h2>

            <p>
                Built using Next.js (hosted on Vercel).
            </p>
            
            <!-- <div class="clear">

                <details>

                    <summary class="portfolio--Summary">Test</summary>

                    <p>
                        Test
                    </p>

                </details>

            </div> -->

        </div>
    
        <div id="SoftwareDevelopmentPortfolio-SnowCompareShop"
             class="text--Portfolio">
        
            <a href="<?=  $snow_compare_shop ?>"
               aria-label="link to Snow Compare Shop project"
               target=”_blank”>
            
                <img src="/assets/images/services/software_development/portfolio_snowcompare_shop.webp"
                     alt="Snowcompare Shop"
                     class="portfolioImage--FloatLeft">

            </a>
                        
            <h2 class="portfolio--SubSection-Title">
                Snow Compare Shop
            </h2>

            <p>
                Coded in PHP, with a MySQL backend.
            </p>

            <p>
                <span class="bold">Example login:</span><br>
                Username: Phil<br>
                Password: test
            </p>
            
            <!-- <div class="clear">

                <details>

                    <summary class="portfolio--Summary">Test</summary>

                    <p>
                        Test
                    </p>

                </details>

            </div> -->

        </div>
    
        <div id="SoftwareDevelopmentPortfolio-SnowCompare"
             class="text--Portfolio">
        
            <a href="<?=  $snow_compare ?>"
               aria-label="link to Snow Compare project"
               target=”_blank”>

                <img src="/assets/images/services/software_development/portfolio_snowcompare.webp"
                     alt="Snowcompare"
                     class="portfolioImage--FloatLeft">

            </a>
                        
            <h2 class="portfolio--SubSection-Title">
                Snow Compare
            </h2>

            <p>
                Coded in PHP, with a MySQL backend.
            </p>

            <p>
                <span class="bold">Example login:</span><br>
                Username: Phil<br>
                Password: test
            </p>
            
            <!-- <div class="clear">

                <details>

                    <summary class="portfolio--Summary">Test</summary>

                    <p>
                        Test
                    </p>

                </details>

            </div> -->

        </div>
    
    </div>
        
</div>