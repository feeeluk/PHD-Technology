<?php

    if (str_contains($_SERVER['REQUEST_URI'],'case_studies') != true && str_contains($_SERVER['REQUEST_URI'],'portfolio') != true && str_contains($_SERVER['REQUEST_URI'],'') != true)
        {
            echo "<h1>OUR SERVICES</h1>";
                
        }

?> 

<div id="ServicesSmallerDevices">

    <a href="#BusinessAnalysisAnchor">
        <span>
            Business Analysis 
        </span>
    </a>
    
    <a href="#SoftwareDevelopmentAnchor">
        <span>
            Software Development
        </span>
    </a>
    
    <a href="#ProjectManagementAnchor">
        <span>
            Project Management
        </span>
    </a>
    
    <a href="#DataManipulationAnchor">
        <span>
            Data Manipulation
        </span>
    </a>
    
    <a href="#SkillsDevelopmentAndTrainingAnchor">
        <span>
            Skills Development & Training
        </span>
    </a>
    
    <a href="#ProofOfConceptAnchor">            
        <span>
            Proof of Concept
        </span>
    </a>

    <a href="#ArtificialIntelligenceAnchor">
        <span>
            Artificial Intelligence
        </span>
    </a>

    <a href="#DigitalMediaAndMarketingAnchor">
        <span>
            Digital Media & Marketing
        </span>
    </a>

    <a href="#UiUxAnchor">
        <span>
            UI/UX
        </span>
    </a>

</div>