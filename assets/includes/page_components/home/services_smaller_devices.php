<?php

    if (str_contains($_SERVER['REQUEST_URI'],'case_studies') != true && str_contains($_SERVER['REQUEST_URI'],'portfolio') != true && str_contains($_SERVER['REQUEST_URI'],'') != true)
        {
            echo "<h1>OUR SERVICES</h1>";
                
        }

?> 

<div id="ServicesSmallerDevices">

    <a href="#BusinessAnalysis">
        <span>
            Business Analysis 
        </span>
    </a>
    
    <a href="#SoftwareDevelopment">
        <span>
            Software Development
        </span>
    </a>
    
    <a href="#ProjectManagement">
        <span>
            Project Management
        </span>
    </a>
    
    <a href="#DataManipulation">
        <span>
            Data Manipulation
        </span>
    </a>
    
    <a href="#SkillsDevelopmentAndTraining">
        <span>
            Skills Development & Training
        </span>
    </a>
    
    <a href="#ProofOfConcept">            
        <span>
            Proof of Concept
        </span>
    </a>

    <a href="#ArtificialIntelligence">
        <span>
            Artificial Intelligence
        </span>
    </a>

    <a href="#DigitalMediaAndMarketing">
        <span>
            Digital Media & Marketing
        </span>
    </a>

    <a href="#UiUx">
        <span>
            UI/UX
        </span>
    </a>

</div>