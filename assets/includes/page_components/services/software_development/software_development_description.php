<div id="SoftwareDevelopmentDescription" class="box--WithPadding item">

    <a id="SoftwareDevelopmentAnchor" class="anchor"></a>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
            {
                echo "<h1 class='item--Heading'>SOFTWARE DEVELOPMENT</h1>";
            }

            else {
                echo "<h1 class='item--Heading'>SOFTWARE DEVELOPMENT</h1>";
            }

    ?>

    <div id="DotNetDevelopmentSummaryOfService" class="summaryOfService">

        <img src="/assets/images/services/software_development/overview_dot_net_development.webp" alt=".NET devlopment">

        <h3>.NET Development</h3>

        <p>
            .NET development is the process of building software applications using Microsoft’s .NET framework. It’s a popular platform for creating a wide range of apps—from web and mobile to desktop, cloud, gaming, and IoT solutions.
        </p>

    </div>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
        {

    ?>

        <div id="DotNetDevelopmentDetailsOfService" class="detailsOfService">

            <h3>.Net development with PHD Technology</h3>

            <p>
                TEST. This paragraph should only be visible in the specific service page, not on the homepage.
            </p>

        </div>

    
    <?php

        }
    
    ?>

    <div id="WebDevelopmentSummaryOfService" class="summaryOfService">

        <img src="/assets/images/services/software_development/overview_web_development.webp" alt="Web development">
        
        <h3>Web Development</h3>
        
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

    <div id="WebDevelopmentDetailsOfService" class="detailsOfService">

        <h3>Web development with PHD Technology</h3>
        
        <p>
            TEST. This paragraph should only be visible in the specific service page, not on the homepage.
        </p>

    </div>

    <?php
            }
    ?>
    
</div>
