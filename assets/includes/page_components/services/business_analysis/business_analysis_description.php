<a id="BusinessAnalysisAnchor" class="anchor"></a>

<div id="BusinessAnalysisDescription" class="box--WithPadding item">

    <h1 class='item--Title'>BUSINESS ANALYSIS</h1>

    <div id="BusinessAnalysisSummaryOfService" class="text">

        <img src="/assets/images/services/business_analysis/overview_business_analysis.webp" alt="business analysis" class="text--FloatLeft">
        
        <p>
            Business analysis is one of the most effective ways an organisation can improve how it operates, makes decisions, and delivers value.
        </p>
        
        <p>    
            It is the discipline of identifying needs and determining the best solutions to meet those needs. It helps organisations understand what they should change, why they should change it, and how to implement those changes effectively.
        </p>

        <p>
            It is not an administrative task, it is a strategic capability.
        </p>
        
        <p>
            It enables smarter decisions, more efficient operations, reduced costs, and better outcomes. Investing in business analysis is ultimately an investment in clarity, confidence, and long‑term success.
        </p>

    </div>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'business_analysis') == false)
            {
                $link = "pages/services/business_analysis.php";

                echo "<div class='clickForDetails'>";

                    include($path."assets/includes/components/services/button_click_for_details.php");

                echo "</div>";

            }

        if (str_contains($_SERVER['REQUEST_URI'],'business_analysis') == true)
            {

    ?>

    <div id="BusinessAnalysisDetailsOfService" class="text">

        <details class="details">

            <summary class="summary">More Information</summary>
            
            <h2 class="item--Heading">Business Analysis: A Strategic Investment in Better Decisions and Better Outcomes</h2>
            
            <p>
                At its core, business analysis provides a structured approach to understanding how a business works today, identifying where inefficiencies or risks exist, and defining practical, evidence‑based improvements that lead to measurable gains.
            </p>
            
            <p>
                Rather than relying on assumptions or intuition, business analysis grounds decisions in data, stakeholder insight, and clear business needs. This ensures that every change - whether large or small - directly supports organisational goals and delivers tangible benefits.
            </p>

        </details>

        <h2 class="item--Heading">Business Analysis with PDH Technology</h2>

        <p>
            Whether you simply need help, advice, or if you would like to hire us as as Business Analysts, we are here to help!
        </p>

        <p>
            With many years of Business Analysis experience across a variety of sectors, we are able to:
        </p>

        <ul>
            <li>Produce and/or manage your Product Roadmap</li>
            <li>Manage your Product Backlog</li>
            <li>Create User Stories</li>
            <li>Elicit stakeholder, or end-user requirements</li>
            <li>Meaningfully participate in Scrum ceremonies</li>
            <li>Provide agile support e.g. Agile Delivery Manager (ADM) and Scrum Master roles</li>
            <li>Facilitate workshops</li>
        </ul>
        
    </div>

    <?php

        }
        
    ?>

</div>