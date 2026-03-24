<?php
    
    // CONFIG
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");     
        
    // PAGE META
    $subTitle = "Proof of Concept";
    $metaDescription = "Proof of Concept";
    $metaKeywords ="Proof of Concept";

?>

<?php include($root."/assets/includes/layout/page_open.php"); ?>

    <div id="ProofOfConcept" class="box">

        <?php

            // Description
            include($root."/assets/includes/sections/services/proof_of_concept/proof_of_concept_description.php");

            // Benefits
            include($root."/assets/includes/sections/services/proof_of_concept/proof_of_concept_benefits.php");
            
            // Prices
            include($root."/assets/includes/sections/services/proof_of_concept/proof_of_concept_prices.php");
            
            // Portfolio
            include($root."/assets/includes/sections/services/proof_of_concept/proof_of_concept_portfolio.php");
            
            // Next Steps
            include($root."/assets/includes/sections/services/proof_of_concept/proof_of_concept_next_steps.php");

        ?>

    </div>
    
<?php include($root."/assets/includes/layout/page_close.php"); ?>