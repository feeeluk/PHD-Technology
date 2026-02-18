<div id="DataManipulationDescription" class="box--WithPadding item description">

    <a id="DataManipulationAnchor" class="anchor"></a>

    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'data_manipulation') == true)
            {
                echo "<h1 class='item--Heading'>DATA MANIPULATION</h1>";
            }

            else {
                echo "<h1 class='item--Heading'>DATA MANIPULATION</h1>";
            }

    ?>

    <div id="DataManipulationSummaryOfService" class="summaryOfService description">            

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
                
                echo "<div class='clickForDetails'>";
                
                    include($path."assets/includes/components/services/button_click_for_details.php");

                echo "</div>";

            }

        if (str_contains($_SERVER['REQUEST_URI'],'data_manipulation') == true)
            {

    ?>

    <div id="DataManipulationDetailsOfService" class="detailsOfService description">

        <h3>Data Manipulation with PHD Technology</h3>
        
        <p>
            TEST. This paragraph should only be visible in the specific service page, not on the homepage.
        </p>

    </div>

    <?php
            }
    ?>

</div>