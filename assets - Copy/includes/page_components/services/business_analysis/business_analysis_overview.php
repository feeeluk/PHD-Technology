<article class="overview">

    <a id="business_analysis" class="anchor"></a>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'business_analysis') == true)
            {
                echo "<h1 class='margin_top title'>BUSINESS ANALYSIS</h1>";
            }

            else {
                echo "<h1 class='title'>BUSINESS ANALYSIS</h1>";
            }

    ?>

    <section>

        <div>

            <span class="banner">

                <img src="/assets/images/services/business_analysis/overview_business_analysis.webp" alt="business analysis">

            </span>
            
            <p>
                Business analysis is the process of identifying business needs and finding solutions to problems. It involves understanding how organizations function, gathering and analyzing data, and recommending changes that will deliver value to stakeholders.
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

                <h4 class="margin_top">Business Analysis with PHD Technology</h4>
                
                <p>
                    Whether you simply need advice, or if you would like us to undertake Business Analysis for you, we are here to help.
                </p>

                <p>
                    With many years of commercial Business Analysis experience, we are well placed to help:

                    <ul>
                        <li>workshop facilitation</li>
                        <li>product roadmap management</li>
                        <li>user story creation</li>
                        <li>backlog management</li>
                        <li>SCRUM</li>
                    </ul>
                    
                </p>

            <?php
                    }
            ?>

        </div>

    </section>

</article>