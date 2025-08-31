<article class="overview">

    <a id="project_management" class="anchor"></a>

<?php

    if (str_contains($_SERVER['REQUEST_URI'],'project_management') == true)
        {
            echo "<h1 class='margin_top title'>PROJECT MANAGEMENT</h1>";
        }

        else {
            echo "<h1 class='title'>PROJECT MANAGEMENT</h1>";
        }

?>

    <section>

        <div>

            <span class="banner">
                <img src="/assets/images/services/project_management/overview_project_management.webp" alt="Project management">
            </span>

            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>


            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'project_management') == false)
                    {
                        $link = "pages/services/project_management.php";
                        
                        include($path."assets/includes/components/button_click_for_details.php");

                    }

                if (str_contains($_SERVER['REQUEST_URI'],'project_management') == true)
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