<a id="ProjectManagementAnchor" class="anchor"></a>

<div id="ProjectManagementDescription" class="box--WithPadding item">

    <h1 class='item--Title'>PROJECT MANAGEMENT</h1>

    <div id="ProjectManagementSummaryOfService" class="text ">

        <img src="/assets/images/services/project_management/overview_project_management.webp" alt="Project management" class="text--FloatLeft">

        <p>
            Project management is the discipline of planning, organizing, and overseeing work to achieve specific goals within a defined timeframe, budget, and scope. It involves applying knowledge, skills, tools, and techniques to ensure a project is completed successfully.
        </p>

    </div>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'project_management') == false)
            {
                $link = "pages/services/project_management.php";
                
                echo "<div class='clickForDetails'>";

                    include($path."assets/includes/components/services/button_click_for_details.php");

                echo "</div>";

            }

        if (str_contains($_SERVER['REQUEST_URI'],'project_management') == true)
            {

    ?>

    <div id="ProjectManagementDetailsOfService" class="text">
        
        <details class="details">

            <summary class="summary">More Information</summary>

        </details>
  
        <h2 class="item--Heading">Project Management with PHD Technology</h2>
        
        <p>
            TEST. This paragraph should only be visible in the specific service page, not on the homepage.
        </p>

    </div>

    <?php
            }
    ?>
            
</div>