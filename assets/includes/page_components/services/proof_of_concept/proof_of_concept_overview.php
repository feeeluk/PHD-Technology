<article class="overview">

    <a id="proof_of_concept" class="anchor"></a>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'proof_of_concept') == true)
            {
                echo "<h1 class='title margin_top'>PROOF OF CONCEPT</h1>";
            }

        else {
                echo "<h1 class='title margin_top'>PROOF OF CONCEPT</h1>";
            }

    ?>       

    <section>

        <div>

            <span class="banner">
                <img src="/assets/images/services/proof_of_concept/overview_proof_of_concept.webp" alt="Proof of Concept">
            </span>

            <p>
                A 'Proof of Concept' (PoC) is a demonstration - often in the form of a small, pilot project or prototype - that tests whether a business idea, product, service, or solution is feasible, practical, and viable before investing more time and resources into full-scale development or deployment.
            </p>

            <p>
                This is the most comprehensive service that we provide, and will likely combine elements from other services. 
            </p>

            <p>
                As each PoC is highly unique, please get in touch with us to discuss your needs.
            </p>
            

            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'proof_of_concept') == false)
                    {
                        $link = "pages/services/proof_of_concept.php";
                        
                        include($path."assets/includes/components/button_click_for_details.php");

                    }

                if (str_contains($_SERVER['REQUEST_URI'],'proof_of_concept') == true)
                    {

            ?>

            <h4 class="margin_top">Proof of Concept with PHD Technology</h4>
            <p>
                TEST. This paragraph should only be visible in the specific service page, not on the homepage.
            </p>

            <?php
                    }
            ?>    

        </div>

    </section>

</article>