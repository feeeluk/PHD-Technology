<a id="SoftwareDevelopmentAnchor" class="anchor"></a>

<div id="SoftwareDevelopmentDescription" class="box--WithPadding item">

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
            {
                echo "<h1 class='item--Title'>SOFTWARE DEVELOPMENT</h1>";
            }

            else {
                echo "<h1 class='item--Title'>SOFTWARE DEVELOPMENT</h1>";
            }

    ?>

    <div id="DotNetDevelopmentSummaryOfService" class="text">

        <img src="/assets/images/services/software_development/overview_dot_net_development.webp" alt=".NET devlopment" class="text--FloatLeft" />

        <h2 class="item--SubSectionTitle">.NET</h2>

        <p>
            .NET development is the process of building software applications using Microsoft’s .NET framework. It’s a popular platform for creating a wide range of apps—from web and mobile to desktop, cloud, gaming, and IoT solutions.
        </p>

    </div>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
        {

    ?>

        <div id="DotNetDevelopmentDetailsOfService" class="text">

        <details>

            <summary>More Information</summary>

            <p>This is more information</p>
            
        </details>
    
        <h3 class="item--Heading">.NET development with PHD Technology</h3>

            <p>
                TEST. This paragraph should only be visible in the specific service page, not on the homepage.
            </p>

        </div>
    
    <?php

        }
    
    ?>

    <div id="WebDevelopmentSummaryOfService" class="text">

        <img src="/assets/images/services/software_development/overview_web_development.webp" alt="Web development" class="text--FloatLeft" />
        
        <h2 class="item--SubSectionTitle">Web</h2>
        
        <p>
            Web development is the process of creating and maintaining websites or web applications that run on the internet (or an intranet). It involves everything from designing how a site looks to making sure it functions smoothly behind the scenes.
        </p>

    </div>
    
    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'software_development') == false)
            {
                $link = "pages/services/software_development.php";
        
                echo "<div class='clickForDetails'>";        

                    include($path."assets/includes/components/services/button_click_for_details.php");

                echo "</div>";

            }

        if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
            {

    ?>

    <div id="WebDevelopmentDetailsOfService" class="text">
        
        <details>

            <summary>More Information</summary>

            <p>This is more information</p>
            
        </details>
    
        <h3 class="item--Heading">Web development with PHD Technology</h3>
        
        <p>
            TEST. This paragraph should only be visible in the specific service page, not on the homepage.
        </p>

    </div>

    <?php
            }
    ?>
    
</div>
