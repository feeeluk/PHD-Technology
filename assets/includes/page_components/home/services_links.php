<article id="services">

    <?php

    if (str_contains($_SERVER['REQUEST_URI'],'case_studies') != true && str_contains($_SERVER['REQUEST_URI'],'portfolio') != true)
        {
            echo "<h1>OUR SERVICES</h1>";
                
        }

    ?> 

    <section>

        <a href="#business_analysis">
            <span>
                Business Analysis 
            </span>
        </a>
        
        <a href="#software_development">
            <span>
                Software Development
            </span>
        </a>
        
        <a href="#project_management">
            <span>
                Project Management
            </span>
        </a>
        
        <a href="#data_manipulation">
            <span>
                Data Manipulation
            </span>
        </a>
        
        <a href="#skills_development_and_training">
            <span>
                Skills Development & Training
            </span>
        </a>
        
        <a href="#proof_of_concept">            
            <span>
                Proof of Concept
            </span>
        </a>

        <a href="#artificial_intelligence">
            <span>
                Artificial Intelligence
            </span>
        </a>

        <a href="#digital_media_and_marketing">
            <span>
                Digital Media & Marketing
            </span>
        </a>

        <a href="#ui_ux">
            <span>
                UI/UX
            </span>
        </a>

    </section>

</article>