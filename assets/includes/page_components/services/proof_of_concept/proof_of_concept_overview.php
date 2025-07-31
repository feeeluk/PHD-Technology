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
            
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            
            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'proof_of_concept') == false)
                    {
                        echo "<a href='/pages/services/proof_of_concept.php'>";

                            echo "<span class='more_information'>";

                                echo "More Information";

                            echo "</span>";

                        echo "</a>";

                    }

            ?>     

        </div>

    </section>

</article>