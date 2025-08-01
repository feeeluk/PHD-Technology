<article class="overview">

<?php

    if (str_contains($_SERVER['REQUEST_URI'],'project_management') == true)
        {
            echo "<h1 id=project_management class='margin_top'>PROJECT MANAGEMENT</h1>";
        }

        else {
            echo "<h1 id=project_management'>PROJECT MANAGEMENT</h1>";
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
                        include($path."assets/includes/page_components/other/button_more_information.php");

                    }

            ?>
            
        </div>

    </section>

</article>