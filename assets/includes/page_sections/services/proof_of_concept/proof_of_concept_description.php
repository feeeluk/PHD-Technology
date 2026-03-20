<a id="ProofOfConceptAnchor" class="anchor"></a>

<div id="ProofOfConceptDescription" class="box--WithPadding item">

    <h1 class='item--Title'>PROOF OF CONCEPT</h1>       

    <div id="ProofOfConceptSummaryOfService" class="text">

        <img src="/assets/images/services/proof_of_concept/proof_of_concept.webp" alt="Proof of Concept" class="img--FloatLeft">

        <p>
            A 'Proof of Concept' (PoC) is a demonstration - often in the form of a small, pilot project or prototype - that tests whether a business idea, product, service, or solution is feasible, practical, and viable before investing more time and resources into full-scale development or deployment.
        </p>

        <p>
            This is the most comprehensive service that we provide, combining elements from other services. 
        </p>

        <p>
            As each PoC is highly unique, please get in touch with us to discuss your needs.
        </p>
            
    </div>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'proof_of_concept') == false)
            {
                $link = "pages/services/proof_of_concept.php";
                $aria = "Link to Proof of Concenpt services page";
                
                echo "<div class='clickForDetails'>";
                
                    include($root."/assets/includes/components/services/button_click_for_details.php");

                echo "</div>";

            }

        if (str_contains($_SERVER['REQUEST_URI'],'proof_of_concept') == true)
            {

    ?>

    <div id="ProofOfConceptDetailsOfService" class="text">

        <h2 class="item--Heading">Proof of Concept with PHD Technology</h2>
        
        <p>
            A Proof of Concept with PHD Technology turns your ideas into evidence. We design and build prototypes that validate feasibility, uncover risks, and demonstrate real‑world values of your ideas.</p>
            
        <p>
            Our approach blends analysis, design, and development to give you clarity, confidence, and a practical foundation for your next step.</p>

    </div>

    <?php
            }
    ?>

</div>