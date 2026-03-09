<?php
    
    // SET PAGE DETAILS, VARIABLES, & CONSTANTS
    // ****************************************************************************************************************************************
        
        // set the site root folder in relation to this page
        $path = "../../";

            //    ./ = page is located in the root directory
            //    ../ = page is located one folder up
            //    ../../ = page is located two folders up, etc       
        
        // set the page title
        $subTitle = "Software Development";

        // Set page META tags.
        $metaDescription = "Software Development";
        $metaKeywords ="Software Development, Web, Web Development, .Net, .Net Development, Software, HTML, CSS, PHP, MySQL, Hosting Help, Domain Registration Help, JavaScript, Next.js, React, C#";

    // HTML 1
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_1.php");

?>

<div id="SoftwareDevelopment" class="box">

    <?php    

        // PAGE CONTENTS HERE

            // Description
            include($path."assets/includes/page_sections/services/software_development/software_development_description.php");

            // Benefits
            // include($path."assets/includes/page_sections/services/software_development/software_development_benefits.php");

            // Prices
            include($path."assets/includes/page_sections/services/software_development/software_development_prices.php");
            
            // Portfolio
            include($path."assets/includes/page_sections/services/software_development/software_development_portfolio.php"); 
            
            // Case Studies
            //nclude($path."assets/includes/page_sections/services/software_development/software_development_case_studies.php");
            
            // Next Steps
            include($path."assets/includes/page_sections/services/software_development/software_development_next_steps.php");

    ?>

</div>
    
<?php    

    // HTML 2
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_2.php");
    
?>