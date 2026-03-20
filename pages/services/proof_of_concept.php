<?php
    
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");     
        
    // Set the page title.
    $subTitle = "Proof of Concept";

    // Set page meta tags.
    $metaDescription = "Proof of Concept";
    $metaKeywords ="Proof of Concept";

    // HTML 1
    // ****************************************************************************************************************************************
    include($root."/assets/includes/components/page/html_1.php");

?>

<div id="ProofOfConcept" class="box">

    <?php
    
            // Description
            include($root."/assets/includes/page_sections/services/proof_of_concept/proof_of_concept_description.php");

            // Benefits
            include($root."/assets/includes/page_sections/services/proof_of_concept/proof_of_concept_benefits.php");
            
            // Prices
            include($root."/assets/includes/page_sections/services/proof_of_concept/proof_of_concept_prices.php");
            
            // Portfolio
            include($root."/assets/includes/page_sections/services/proof_of_concept/proof_of_concept_portfolio.php");
            
            // Next Steps
            include($root."/assets/includes/page_sections/services/proof_of_concept/proof_of_concept_next_steps.php");

    ?>

</div>
    
<?php

    // HTML 2
    // ****************************************************************************************************************************************
    include($root."/assets/includes/components/page/html_2.php");
    
?>