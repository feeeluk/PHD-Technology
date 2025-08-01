<article class="overview">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'proof_of_concept') == true)
            {
                echo "<h1 id='proof_of_concept' class='margin_top'>PROOF OF CONCEPT</h1>";
            }

        else {
                echo "<h1 id='proof_of_concept'>PROOF OF CONCEPT</h1>";
            }

    ?>       

    <section>

        <div>

            <span class="banner">
                <img src="/assets/images/services/proof_of_concept/overview_proof_of_concept_small.webp" alt="Proof of Concept">
            </span>

            <p>
                A 'Proof of Concept' (PoC) is a demonstration - often in the form of a small, pilot project or prototype - that tests whether a business idea, product, service, or solution is feasible, practical, and viable before investing more time and resources into full-scale development or deployment.
            </p>
            
            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'proof_of_concept') == false)
                    {
                        include($path."assets/includes/page_components/other/button_more_information.php");

                    }

            ?>     

        </div>

    </section>

</article>