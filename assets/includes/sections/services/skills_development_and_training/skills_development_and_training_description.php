<a id="SkillsDevelopmentAndTrainingAnchor" class="anchor">
</a>

<div id="SkillsDevelopmentAndTrainingDescription" class="box--WithPadding item">

    <h1 class='item--Title'>
        SKILLS DEVELOPMENT & TRAINING
    </h1>

    <div id="SkillsDevelopmentAndTrainingSummaryOfService" class="text">

        <img src="/assets/images/services/skills_development_and_training/skills_development_and_training.webp" alt="Skills development & training" class="img--FloatLeft">
        
        <p>
            Skills development and training is the process of helping individuals improve their abilities, knowledge, and competencies so they can perform better in their current roles.
        </p>

    </div>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'skills_development_and_training') == false)
            {
                $link = "pages/services/skills_development_and_training.php";
                $aria = "Link to Skills Development and Training services page";
                
                echo "<div class='clickForDetails'>";
                
                    include($root."/assets/includes/layout/services/button_click_for_details.php");

                echo "</div>";

            }

        if (str_contains($_SERVER['REQUEST_URI'],'skills_development_and_training') == true)
            {

    ?>

    <div id="SkillsDevelopmentAndTrainingDetailsOfService" class="text">
    
        <h2 class="item--Heading">
            Skills Development and Training with PHD Technology
        </h2>

        <p>
            We focus on practical, vocational learning tailored to your team’s real‑world needs.
        </p>
        
        <p>
            We don’t offer formal certification — instead, we teach people how to confidently use the tools, data, and systems that matter to your organisation. Whether you’re adopting new software, upskilling individuals / teams, or building internal capability, we help your staff gain the skills to work smarter and more independently.
        </p>

    </div>

    <?php
            }
    ?>

</div>