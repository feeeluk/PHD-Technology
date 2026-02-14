<div class="serviceItem">

    <a id="SkillsDevelopmentAndTraining" class="anchor"></a>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'skills_development_and_training') == true)
            {
                echo "<h1>SKILLS DEVELOPMENT & TRAINING</h1>";
            }

            else {
                echo "<h1>SKILLS DEVELOPMENT & TRAINING</h1>";
            }

    ?>

    <div class="summaryOfService">

        <img src="/assets/images/services/skills_development_and_training/overview_skills_development_and_training.webp" alt="Skills development & training">

        <p>
            Skills development and training is the process of helping individuals improve their abilities, knowledge, and competencies so they can perform better in their current roles or prepare for future opportunities.
        </p>

    </div>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'skills_development_and_training') == false)
            {
                $link = "pages/services/skills_development_and_training.php";
                
                include($path."assets/includes/components/other/button_click_for_details.php");

            }

        if (str_contains($_SERVER['REQUEST_URI'],'skills_development_and_training') == true)
            {

    ?>

    <div class="detailsOfService">

        <h3>Skills Development and Training with PHD Technology</h3>

        <p>
            TEST. This paragraph should only be visible in the specific service page, not on the homepage.
        </p>

    </div>

    <?php
            }
    ?>

</div>