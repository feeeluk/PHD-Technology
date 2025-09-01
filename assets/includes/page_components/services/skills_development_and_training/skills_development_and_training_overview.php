<article class="overview">

    <a id="skills_development_and_training" class="anchor"></a>

<?php

    if (str_contains($_SERVER['REQUEST_URI'],'skills_development_and_training') == true)
        {
            echo "<h1 class='margin_top title'>SKILLS DEVELOPMENT & TRAINING</h1>";
        }

        else {
            echo "<h1 class='title'>SKILLS DEVELOPMENT & TRAINING</h1>";
        }

?>
    
    <section>

        <div>

            <span class="banner">
                <img src="/assets/images/services/skills_development_and_training/overview_skills_development_and_training.webp" alt="Skills development & training">
            </span>

            <p>
                Skills development and training is the process of helping individuals improve their abilities, knowledge, and competencies so they can perform better in their current roles or prepare for future opportunities.
            </p>

            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'skills_development_and_training') == false)
                    {
                        $link = "pages/services/skills_development_and_training.php";
                        
                        include($path."assets/includes/components/button_click_for_details.php");

                    }

                if (str_contains($_SERVER['REQUEST_URI'],'skills_development_and_training') == true)
                    {

            ?>

            <h4 class="margin_top">Skills Development and Training with PHD Technology</h4>
            <p>
                TEST. This paragraph should only be visible in the specific service page, not on the homepage.
            </p>

            <?php
                    }
            ?>
            
        </div>

    </section>

</article>