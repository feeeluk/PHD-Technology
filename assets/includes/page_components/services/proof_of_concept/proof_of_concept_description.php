<div id="ProofOfConceptDescription" class="box--WithPadding item">

    <a id="ProofOfConceptAnchor" class="anchor"></a>

    <h1 class='item--Heading'>PROOF OF CONCEPT</h1>       

    <div id="ProofOfConceptSummaryOfService" class="summaryOfService">

        <img src="/assets/images/services/proof_of_concept/overview_proof_of_concept.webp" alt="Proof of Concept">

        <p>
            A 'Proof of Concept' (PoC) is a demonstration - often in the form of a small, pilot project or prototype - that tests whether a business idea, product, service, or solution is feasible, practical, and viable before investing more time and resources into full-scale development or deployment.
        </p>

        <p>
            This is the most comprehensive service that we provide, and will likely combine elements from other services. 
        </p>

        <p>
            As each PoC is highly unique, please get in touch with us to discuss your needs.
        </p>
            
    </div>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'proof_of_concept') == false)
            {
                $link = "pages/services/proof_of_concept.php";
                
                echo "<div class='clickForDetails'>";
                
                    include($path."assets/includes/components/services/button_click_for_details.php");

                echo "</div>";

            }

        if (str_contains($_SERVER['REQUEST_URI'],'proof_of_concept') == true)
            {

    ?>

    <div id="ProofOfConceptDetailsOfService" class="detailsOfService">

        <h3>Proof of Concept with PHD Technology</h3>
        
        <p>
            TEST. This paragraph should only be visible in the specific service page, not on the homepage.
        </p>

    </div>

    <?php
            }
    ?>

</div>