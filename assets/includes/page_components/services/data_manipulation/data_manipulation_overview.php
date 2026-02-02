<article class="overview">

    <a id="data_manipulation" class="anchor"></a>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'data_manipulation') == true)
            {
                echo "<h1 class='title margin_top'>DATA MANIPULATION</h1>";
            }

            else {
                echo "<h1 class='title margin_top'>DATA MANIPULATION</h1>";
            }

    ?>

    <section>

        <div>
            
            <span class="banner">

                <img src="/assets/images/services/data_manipulation/overview_data_manipulation.webp" alt="data manipulation">

            </span>
     
            <p>
                Data manipulation is the process of adjusting, organizing, or transforming data to make it more meaningful, accurate, or useful. It’s often done to prepare data for analysis, reporting, or decision-making.
            </p>

            <p>
                In simple terms, it’s about taking raw data and changing it into a cleaner, more usable form.
            </p>
            
            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'data_manipulation') == false)
                    {
                        $link = "pages/services/data_manipulation.php";
                        
                        include($path."assets/includes/components/button_click_for_details.php");

                    }

                if (str_contains($_SERVER['REQUEST_URI'],'data_manipulation') == true)
                    {

            ?>

                    <h4 class="margin_top">Data Manipulation with PHD Technology</h4>
                    
                    <p>
                        TEST. This paragraph should only be visible in the specific service page, not on the homepage.
                    </p>

            <?php
                    }
            ?>

        </div>

    </section>

</article>