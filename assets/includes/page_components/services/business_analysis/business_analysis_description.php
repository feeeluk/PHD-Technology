<a id="business_analysis" class="anchor"></a>

<div class="descriptionOfService">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'business_analysis') == true)
        {
            echo "<h1>BUSINESS ANALYSIS</h1>";
        }

        else {
            echo "<h1>BUSINESS ANALYSIS</h1>";
        }

    ?>

    <div class="summaryOfService">

        <img src="/assets/images/services/business_analysis/overview_business_analysis.webp" alt="business analysis">
        
        <p>
            Business analysis is one of the most effective ways an organisation can improve how it operates, makes decisions, and delivers value.
        </p>
        
        <p>    
            It is the discipline of identifying needs and determining the best solutions to meet those needs. It helps organisations understand what they should change, why they should change it, and how to implement those changes effectively.
        </p>

        <p>
            It is not an administrative task, it is a strategic capability. It enables smarter decisions, more efficient operations, reduced costs, and better outcomes. Investing in business analysis is ultimately an investment in clarity, confidence, and long‑term success.
        </p>

    </div>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'business_analysis') == false)
            {
                $link = "pages/services/business_analysis.php";
                
                echo "<div class='clickForDetails'>";

                    include($path."assets/includes/components/other/button_click_for_details.php");

                echo "</div>";

            }

        if (str_contains($_SERVER['REQUEST_URI'],'business_analysis') == true)
            {

    ?>

        <div class="detailsOfService">

            <h3 class="margin_top">Business Analysis: A Strategic Investment in Better Decisions and Better Outcomes</h3>
            
            <p>
                At its core, business analysis provides a structured approach to understanding how a business works today, identifying where inefficiencies or risks exist, and defining practical, evidence‑based improvements that lead to measurable gains.
            </p>
            
            <p>
                Rather than relying on assumptions or intuition, business analysis grounds decisions in data, stakeholder insight, and clear business needs. This ensures that every change—whether large or small—directly supports organisational goals and delivers tangible benefits.Whether you simply need help and advice, or if you would like to hire us as as Business Analysts, we are here to help.
            </p>

            <p>
                With many years of commercial Business Analysis experience, across a variety of sectors, we are able to:

                <ul>
                    <li>Facilitate workshops</li>
                    <li>Produce and/or manage your Product Roadmap</li>
                    <li>Elicit stakeholder and end-user requirements</li>
                    <li>Produce User Stories</li>
                    <li>Manage a Product Backlog</li>
                    <li>Follow agile principles - we have lots of experience with SCRUM</li>
                </ul>
                
            </p>

        </div>

    <?php
            }
    ?>

    </div>

</div>