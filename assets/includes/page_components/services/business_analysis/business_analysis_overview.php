<article class="overview">

    <a id="business_analysis" class="anchor"></a>

<?php

    if (str_contains($_SERVER['REQUEST_URI'],'business_analysis') == true)
        {
            echo "<h1 class='margin_top'>BUSINESS ANALYSIS</h1>";
        }

        else {
            echo "<h1>BUSINESS ANALYSIS</h1>";
        }

?>

    <section>

        <div>

            <span class="banner">
                <img src="/assets/images/services/business_analysis/overview_business_analysis.webp" alt="business analysis">
            </span>
            
            <p>
                Business analysis is the process of identifying business needs and finding solutions to business problems. It involves understanding how organizations function, gathering and analyzing data, and recommending changes that will deliver value to stakeholders.
            </p>

            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'business_analysis') == false)
                    {
                        $link = "pages/services/business_analysis.php";
                        
                        include($path."assets/includes/components/button_click_for_details.php");

                    }

                if (str_contains($_SERVER['REQUEST_URI'],'business_analysis') == true)
                    {

            ?>

            <p>
                TEST. This paragraph should only be visible in the specific service page, not on the homepage.
            </p>

            <?php
                    }
            ?>

        </div>

    </section>

</article>