<a id="SoftwareDevelopmentAnchor" class="anchor">
</a>

<div id="SoftwareDevelopmentDescription" class="box--WithPadding item">

    <h1 class='item--Title'>
        SOFTWARE DEVELOPMENT
    </h1>

    <div id="DotNetDevelopmentSummaryOfService" class="text summaryOfService">

        <img src="/assets/images/services/software_development/dot_net_development.webp" alt=".NET devlopment" class="img--FloatLeft">

        <h2 class="item--SubSectionTitle">
            .NET
        </h2>

        <h3 class="item--SubSectionSubTitle">
            (COMMING SOON)
        </h3>

        <!-- <p>
            Comming soon.
        </p> -->

    </div>

    <div id="WebDevelopmentSummaryOfService" class="text summaryOfService">

        <img src="/assets/images/services/software_development/web_development.webp" alt="Web development" class="img--FloatLeft">
        
        <h2 class="item--SubSectionTitle">
            Web
        </h2>
        
        <p>
            Web development is the process of creating and maintaining websites or web applications that run on the internet (or an intranet). It involves everything from designing how a site looks to making sure it functions smoothly behind the scenes.
        </p>

    </div>
    
    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'software_development') == false)
        {
            $link = "pages/services/software_development.php";
            $aria = "Link to Software Development services page";
    
            echo "<div class='clickForDetails'>";        

                include($root."/assets/includes/components/services/button_click_for_details.php");

            echo "</div>";

        }

        if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
        {

    ?>

    <div id="SoftwareDevelopmentDetailsOfService" class="text detailsOfService">
    
        <!-- <h2 class="item--Heading">
            Software development with PHD Technology
        </h2>
        
        <p>
            TEST.
        </p> -->

    </div>

    <?php

        }

    ?>
    
</div>
