<a id="SkillsDevelopmentAndTrainingAnchor" class="anchor"></a>

<div id="SkillsDevelopmentAndTrainingDescription" class="box--WithPadding item">

    <h1 class='item--Title'>SKILLS DEVELOPMENT & TRAINING</h1>

    <div id="SkillsDevelopmentAndTrainingSummaryOfService" class="text">

        <img src="/assets/images/services/skills_development_and_training/overview_skills_development_and_training.webp" alt="Skills development & training" class="text--FloatLeft" />
        
        <p>
            Skills development and training is the process of helping individuals improve their abilities, knowledge, and competencies so they can perform better in their current roles or prepare for future opportunities.
        </p>

        </details>

        <details class="details">

            <summary class="summary">More Information</summary>

        </details>

    </div>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'skills_development_and_training') == false)
            {
                $link = "pages/services/skills_development_and_training.php";
                
                echo "<div class='clickForDetails'>";
                
                    include($path."assets/includes/components/services/button_click_for_details.php");

                echo "</div>";

            }

        if (str_contains($_SERVER['REQUEST_URI'],'skills_development_and_training') == true)
            {

    ?>

    <div id="SkillsDevelopmentAndTrainingDetailsOfService" class="text">
    
        <h3 class="item--Heading">Skills Development and Training with PHD Technology</h3>

        <p>
            TEST. This paragraph should only be visible in the specific service page, not on the homepage.
        </p>

    </div>

    <?php
            }
    ?>

</div>