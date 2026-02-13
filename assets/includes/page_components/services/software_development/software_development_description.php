<article class="overview">

    <a id="software_development" class="anchor"></a>

<?php

    if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
        {
            echo "<h1 class='title margin_top'>SOFTWARE DEVELOPMENT</h1>";
        }

        else {
            echo "<h1 class='title margin_top'>SOFTWARE DEVELOPMENT</h1>";
        }

?>

    <section>

        <div class="margin_bottom">

            <span class="banner">

                <img src="/assets/images/services/software_development/overview_dot_net_development.webp" alt=".NET devlopment">

            </span>

            <p>
                .NET development is the process of building software applications using Microsoft’s .NET framework. It’s a popular platform for creating a wide range of apps—from web and mobile to desktop, cloud, gaming, and IoT solutions.
            </p>

            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'software_development') == false)
                    {
                        $link = "pages/services/software_development.php";
                        
                        include($path."assets/includes/components/other/button_click_for_details.php");

                    }

                if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
                    {

            ?>

            <h4 class="margin_top">.Net development with PHD Technology</h4>

            <p>
                TEST. This paragraph should only be visible in the specific service page, not on the homepage.
            </p>

            <?php
                    }
            ?>

        </div>

        <div>

            <span class="banner">

                <img src="/assets/images/services/software_development/overview_web_development.webp" alt="Web development">

            </span>
            
            <p>
                Web development is the process of creating and maintaining websites or web applications that run on the internet (or an intranet). It involves everything from designing how a site looks to making sure it functions smoothly behind the scenes.
            </p>
        
            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'software_development') == false)
                    {
                        include($path."assets/includes/components/button_click_for_details.php");

                    }

                if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
                    {

            ?>

            <h4 class="margin_top">Web development with PHD Technology</h4>
            
            <p>
                TEST. This paragraph should only be visible in the specific service page, not on the homepage.
            </p>

            <?php
                    }
            ?>
            
        </div>
    
    </section>

</article>