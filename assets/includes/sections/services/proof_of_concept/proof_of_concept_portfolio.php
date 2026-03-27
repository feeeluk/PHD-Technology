 <div id="ProofOfConceptPorftfolio" class="box--WithPadding item">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'proof_of_concept') == true)
            {
                echo "<h1 class='item--Title portfolio--Section-Title-NoBottomMargin'>";
                echo    "PORTFOLIO";
                echo "</h1>";

                echo "<h2 class='item--CentreAlignedText portfolio--Section-SubTitle'>";
                echo    "Here are some examples of our work:";
                echo "</h2>";
            }

        elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
            {             
                echo "<h2 class='item--Title portfolio--Section-Title-MoreBottomMargin'>";
                echo    "PROOF-OF-CONCEPT";
                echo "</h2>";    
            }

    ?>

    <div class="portfolio">
                
        <div id="PortfolioProofOfConceptTreeData"
             class="text--Portfolio">
        
            <a href="<?=  $tree_data ?>" aria-label="link to Tree Data project" target=”_blank”>
                
                <img src="/assets/images/services/proof_of_concept/portfolio_treedata_v1.webp"
                     alt="Tree Data"
                     class="portfolioImage--FloatLeft">
                     
            </a>

            <h2 class="portfolio--SubSection-Title">
                Tree Data
            </h2>
            
            <p>
                We developed a web application for an arborist seeking to offer clients deeper insight into the trees included in his surveys.
            </p>
            
            <p>
                The POC aimed to validate two things: whether the concept was technically achievable, and whether customers would value — and pay for — enhanced, tree‑specific digital access.
            </p>

            <div class="clear">

                <details>

                    <summary class="portfolio--Summary">More Information</summary>

                    <p>
                        The Proof of Concept was designed to answer two key questions:
                    </p>

                    <ol>
                        <li>Technical feasibility — could a flexible, tree‑by‑tree digital interface be built efficiently and reliably?</li>
                        <li>Commercial viability — would customers find this enhanced access valuable enough to justify an additional paid service?</li>
                    </ol>

                    <p>
                        To support this exploration, PDH Technology created a lightweight, browser‑based interface that allowed the arborist to:
                    </p>

                    <ul>
                        <li>Identify each tree within a survey</li>
                        <li>Attach its corresponding data</li>
                        <li>Present that information in a clear, structured, user‑friendly format</li>
                    </ul>    

                    <p>
                        The system was intentionally lean, focusing on demonstrating potential rather than delivering a full production build. This allowed the client to test the concept with real customers and gather feedback on both the technical approach and the commercial opportunity. 
                    </p>    

                    <p>
                        The POC successfully highlighted how a digital interface could transform a static survey into a more interactive and engaging experience, providing a strong foundation for future development if customer interest proved strong.
                    </p>

                </details>
            
            </div>

        </div>

        <div id="PortfolioProofOfConceptPointsAcademy"
             class="text--Portfolio">

            <a href="<?=  $points_academy ?>" aria-label="link to Points Academy project" target=”_blank”>
               
                <img src="/assets/images/services/proof_of_concept/portfolio_points_academy.webp"
                     alt="Points Academy"
                     class="portfolioImage--FloatLeft">

            </a>

            <h2 class="portfolio--SubSection-Title">
                Points Academy
            </h2>
                
            <p>
                We developed a web application for a medical devices company that manually calculated customer loyalty points every six months. The POC demonstrated that automated imports, rule‑based calculations, and a customer portal could replace a month of temporary labour, reduce costs, increase update frequency, and deliver a far better customer experience.
            </p>

            <div class="clear">

                <details>

                    <summary class="portfolio--Summary">More Information</summary>

                    <p>
                        A long‑running loyalty and rewards scheme already existed, but every six months the entire process had to be managed manually. Calculating points, validating data, and updating customer balances required hiring a temporary employee for a full month — a costly, repetitive cycle that limited how often the business could refresh the data.
                    </p>

                    <p>
                        After observing this process firsthand, we identified an opportunity to streamline the workflow and improve the customer experience. The company needed a way to automate the points calculation, reduce administrative overhead, and give customers clearer visibility of their rewards.
                    </p>

                    <p>
                        The Proof of Concept focused on demonstrating that the entire process could be transformed through automation. PDH Technology designed a lightweight system that:
                    </p>

                    <ul>
                        <li>Imported customer activity data</li>
                        <li>Applied a set of configurable rules to calculate points automatically</li>
                        <li>Generated accurate results in minutes rather than weeks</li>
                        <li>Provided a customer‑facing portal showing real‑time points balances</li>
                    </ul>
                    
                    <p>
                       The goals of the POC were twofold: 
                    </p>

                    <ol>
                        <li>Technical feasibility — prove that the manual process could be fully automated using structured imports and rule‑based logic.</li>
                        <li>Added customer value — show how more frequent updates and real‑time visibility could enhance the loyalty programme, even though the initiative was not driven by customer demand.</li>
                    </ol>

                    <p>
                        By shifting the workload from temporary staff to automated processes, the business could refresh points far more often at a significantly reduced cost. Customers benefited from accurate, up‑to‑date information, and the company gained a scalable foundation for expanding the loyalty scheme in the future.
                    </p>

                </details>

            </div>

        </div>

        <div id="PortfolioProofOfConceptCommercialSalesPortal"
             class="text--Portfolio">  

            <a href="<?=  $commercial_sales_portal ?>" aria-label="link to Commercial Sales Portal project" target=”_blank”>
                
                <img src="/assets/images/services/proof_of_concept/portfolio_portal.webp"
                     alt="Commercial Sales Portal"
                     class="portfolioImage--FloatLeft">
            
            </a>

            <h2 class="portfolio--SubSection-Title">
                Commercial Sales Portal
            </h2>

            <p>
                We created an intra-net portal for a medical devices sales team whose telesales staff lacked access to essential product information. The POC demonstrated how a centralised, easily maintained online platform could consolidate product details, pricing, and marketing materials, enabling the team to work more efficiently and support a new sales initiative.
            </p>

            <div class="clear">

                <details>

                    <summary class="portfolio--Summary">More Information</summary>

                    <p>
                        A small medical devices sales team launched a new initiative to promote a range of cost‑effective products to pharmacies via a dedicated telesales team. While the concept was strong, the team quickly encountered a major obstacle: they lacked easy access to the product information required to support their conversations. Details such as specifications, images, pricing, and marketing materials were controlled by other departments, leaving the telesales team without the resources they needed to perform effectively.
                    </p>

                    <p>
                        Recognising the bottleneck, PDH Technology proposed a centralised online portal that would bring all relevant materials together in one accessible location. The goal was to create a single source of truth that could be maintained by marketing and product teams, while giving telesales staff immediate access to the information required to support their calls.
                    </p>
                        
                    <p>
                        The Proof of Concept focused on demonstrating that such a platform could be delivered quickly and maintained easily. PDH Technology designed a lightweight system that:
                    </p>

                        
                    <ul>
                        <li>Consolidated product details, images, and pricing</li>
                        <li>Allowed marketing and product teams to update materials without technical support</li>
                        <li>Provided telesales staff with a clear, structured interface tailored to their workflow</li>
                        <li>Ensured consistent, accurate information across the entire sales process</li>
                    </ul>
                        
                    <p>
                        The purpose of the POC was not to respond to a customer‑driven need, but to validate an internal improvement that could significantly enhance operational efficiency. By centralising information and reducing dependency on other departments, the telesales team gained the tools they needed to support the new sales initiative with confidence and accuracy.
                    </p>

                    <p>
                        The POC successfully demonstrated the value of a unified platform and laid the foundation for a scalable solution that could support broader sales and marketing efforts across the organisation.
                    </p>

                </details>

            </div>

        </div>

    </div>
        
</div>