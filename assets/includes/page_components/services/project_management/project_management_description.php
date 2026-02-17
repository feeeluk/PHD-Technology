<div class="box--WithPadding item--WithBorder">

    <a id="ProjectManagement" class="anchor"></a>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'project_management') == true)
            {
                echo "<h1>PROJECT MANAGEMENT</h1>";
            }

            else {
                echo "<h1>PROJECT MANAGEMENT</h1>";
            }

    ?>

    <div class="summaryOfService">

        <img src="/assets/images/services/project_management/overview_project_management.webp" alt="Project management">

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

    <div class="detailsOfService">

        <h3>Project Management with PHD Technology</h3>
        
        <p>
            TEST. This paragraph should only be visible in the specific service page, not on the homepage.
        </p>

    </div>

    <?php
            }
    ?>
            
</div>