<article class="overview">

    <a id="ui_ux" class="anchor"></a>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'ui_ux') == true)
            {
                echo "<h1 class='title margin_top'>UI/UX</h1>";
            }

            else {
                echo "<h1 class='title'>UI/UX</h1>";
            }

    ?>

    <section>

        <div>

            <span class="banner">

                <img src="/assets/images/services/ui_ux/overview_ui_ux.webp" alt="UI/UX">

            </span>
            
            <p>
                UI/UX is the discipline of identifying needs and determining the best solutions to meet those needs.
            </p>
            
            <p>    
                Essentially, it hels organisations understand what they should change, why they should change it, and how to implement that change effectively.
            </p>

            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'ui_ux') == false)
                    {
                        $link = "pages/services/ui_ux.php";
                        
                        include($path."assets/includes/components/button_click_for_details.php");

                    }

                if (str_contains($_SERVER['REQUEST_URI'],'ui_ux') == true)
                    {

            ?>

                <h4 class="margin_top">UI/UX with PHD Technology</h4>
                
                <p>
                    Whether you simply need advice, or if you would like us to undertake Business Analysis for you, we are here to help.
                </p>

            <?php
                    }
            ?>

        </div>

    </section>

</article>