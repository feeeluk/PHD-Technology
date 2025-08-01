<article class="overview">

<?php

    if (str_contains($_SERVER['REQUEST_URI'],'business_analysis') == true)
        {
            echo "<h1 id='business_analysis' class='margin_top'>BUSINESS ANALYSIS</h1>";
        }

        else {
            echo "<h1 id='business_analysis'>BUSINESS ANALYSIS</h1>";
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
                        include($path."assets/includes/page_components/other/button_more_information.php");

                    }

            ?>    

        </div>

    </section>

</article>