<div class="serviceItem">

    <a id="DataManipulation" class="anchor"></a>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'data_manipulation') == true)
            {
                echo "<h1>DATA MANIPULATION</h1>";
            }

            else {
                echo "<h1>DATA MANIPULATION</h1>";
            }

    ?>

    <div class="summaryOfService">            

        <img src="/assets/images/services/data_manipulation/overview_data_manipulation.webp" alt="data manipulation">         
    
        <p>
            Data manipulation is the process of adjusting, organizing, or transforming data to make it more meaningful, accurate, or useful. It’s often done to prepare data for analysis, reporting, or decision-making.
        </p>

        <p>
            In simple terms, it’s about taking raw data and changing it into a cleaner, more usable form.
        </p>

    </div>
            
    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'data_manipulation') == false)
            {
                $link = "pages/services/data_manipulation.php";
                
                include($path."assets/includes/components/other/button_click_for_details.php");

            }

        if (str_contains($_SERVER['REQUEST_URI'],'data_manipulation') == true)
            {

    ?>

    <div class="detailsOfService">

        <h3>Data Manipulation with PHD Technology</h3>
        
        <p>
            TEST. This paragraph should only be visible in the specific service page, not on the homepage.
        </p>

    </div>

    <?php
            }
    ?>

</div>