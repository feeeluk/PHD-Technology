<?php
    
    // CONFIG
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");      
        
    // PAGE META
    $subTitle = "Skills Development & Training";
    $metaDescription = "Skills Development & Training";
    $metaKeywords ="Skills Development & Training, Vocational, Vocational Training, Skills, Skills Development, Training, Learning";

?>

<?php include($root."/assets/includes/layout/page_open.php"); ?>

    <div id="SkillsDevelopmentAndTraining" class="box">

        <?php

            // Description
            include($root."/assets/includes/sections/services/skills_development_and_training/skills_development_and_training_description.php");

            // Benefits
            include($root."/assets/includes/sections/services/skills_development_and_training/skills_development_and_training_benefits.php");

            // Prices
            include($root."/assets/includes/sections/services/skills_development_and_training/skills_development_and_training_prices.php");

            // Portfolio
            //include($root."/assets/includes/sections/services/skills_development_and_training/skills_development_and_training_portfolio.php");
            
            // Next Steps
            include($root."/assets/includes/sections/services/skills_development_and_training/skills_development_and_training_next_steps.php");

        ?>

    </div>
    
<?php include($root."/assets/includes/layout/page_close.php"); ?>