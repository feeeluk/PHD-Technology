<?php
    
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");      
        
    // Set the page title.
    $subTitle = "Skills Development & Training";

    // Set page meta tags.
    $metaDescription = "Skills Development & Training";
    $metaKeywords ="Skills Development & Training, Vocational, Vocational Training, Skills, Skills Development, Training, Learning";

    // HTML 1
    // ****************************************************************************************************************************************
    include($root."/assets/includes/components/page/html_1.php");

?>

<div id="SkillsDevelopmentAndTraining" class="box">

    <?php    

        // PAGE CONTENTS HERE

            // Description
            include($root."/assets/includes/page_sections/services/skills_development_and_training/skills_development_and_training_description.php");

            // Benefits
            include($root."/assets/includes/page_sections/services/skills_development_and_training/skills_development_and_training_benefits.php");

            // Prices
            include($root."/assets/includes/page_sections/services/skills_development_and_training/skills_development_and_training_prices.php");

            // Portfolio
            include($root."/assets/includes/page_sections/services/skills_development_and_training/skills_development_and_training_portfolio.php");
            
            // Next Steps
            include($root."/assets/includes/page_sections/services/skills_development_and_training/skills_development_and_training_next_steps.php");

    ?>

</div>
    
<?php            
            
    // HTML 2
    // ****************************************************************************************************************************************
    include($root."/assets/includes/components/page/html_2.php");
    
?>