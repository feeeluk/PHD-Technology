<div id="ProofOfConceptPorftfolio" class="box--WithPadding item">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'proof_of_concept') == true)
            {
                echo "<h1 class='item--Heading'>PORTFOLIO</h1>";

                echo "<p class='item--CentreAlignedText'>Examples of work that I have done:</p>";
            }

        elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
            {             
                echo "<h2 class='item--Heading'>PROOF OF CONCEPT</h2>";    
            }

    ?>

    <div class="item--Flex-SpaceAround">
                
        <img src="/assets/images/services/proof_of_concept/portfolio_treedata_v1.webp" alt="Tree Data" class="item--Image-PaddingBottom">

        <img src="/assets/images/services/proof_of_concept/portfolio_portal.webp" alt="Telesales Portal" class="item--Image-PaddingBottom">

        <img src="/assets/images/services/proof_of_concept/portfolio_points_academy.webp" alt="Points Academy Portal" class="item--Image-PaddingBottom">

    </div>
        
</div>