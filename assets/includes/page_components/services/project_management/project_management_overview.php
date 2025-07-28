<?php

    if (str_contains($_SERVER['REQUEST_URI'],'project_management') == true)
        {
            echo "<article class='overview'>";
        }

        else {
            echo "<article class='overview'>";
        }

?>
    
    <h1 id="project_management">PROJECT MANAGEMENT</h1>

    <section>

        <div>

            <span class="banner">

                <img src="/assets/images/services/project_management/overview_project_management.webp" alt="Project management">

            </span>

            <span>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>

            </span>

            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'project_management') == false)
                    {
                        echo "<a href='/pages/services/project_management.php'>";

                            echo "<span class='more_information'>";

                                echo "More Information";

                            echo "</span>";

                        echo "</a>";

                    }

            ?>
            
        </div>

    </section>

</article>