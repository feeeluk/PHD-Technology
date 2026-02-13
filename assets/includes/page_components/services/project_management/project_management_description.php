<article class="overview">

    <a id="project_management" class="anchor"></a>

<?php

    if (str_contains($_SERVER['REQUEST_URI'],'project_management') == true)
        {
            echo "<h1 class='title margin_top'>PROJECT MANAGEMENT</h1>";
        }

        else {
            echo "<h1 class='title margin_top'>PROJECT MANAGEMENT</h1>";
        }

?>

    <section>

        <div>

            <span class="banner">
                <img src="/assets/images/services/project_management/overview_project_management.webp" alt="Project management">
            </span>

            <p>
                Project management is the discipline of planning, organizing, and overseeing work to achieve specific goals within a defined timeframe, budget, and scope. It involves applying knowledge, skills, tools, and techniques to ensure a project is completed successfully.
            </p>


            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'project_management') == false)
                    {
                        $link = "pages/services/project_management.php";
                        
                        include($path."assets/includes/components/other/button_click_for_details.php");

                    }

                if (str_contains($_SERVER['REQUEST_URI'],'project_management') == true)
                    {

            ?>

            <h4 class="margin_top">Project Management with PHD Technology</h4>
            <p>
                TEST. This paragraph should only be visible in the specific service page, not on the homepage.
            </p>

            <?php
                    }
            ?>
            
        </div>

    </section>

</article>