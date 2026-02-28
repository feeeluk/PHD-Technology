<a id="DataManipulationAnchor" class="anchor"></a>

<div id="DataManipulationDescription" class="box--WithPadding item">

    <h1 class='item--Title'>DATA MANIPULATION</h1>

    <div id="DataManipulationSummaryOfService" class="text">            

        <img src="/assets/images/services/data_manipulation/overview_data_manipulation.webp" alt="data manipulation" class="text--FloatLeft" />         
    
        <?php

            if (str_contains($_SERVER['REQUEST_URI'],'data_manipulation') == true)
                {

                    echo "<details class='details' open>";
                        
                        echo "<summary class='summary'>Summary</summary>";

                }

        ?>
        
        <p>
            Data manipulation is the process of adjusting, organizing, or transforming data to make it more meaningful, accurate, or useful. It’s often done to prepare data for analysis, reporting, or decision-making.
        </p>

        <p>
            In simple terms, it’s about taking raw data and changing it into a cleaner, more usable form.
        </p>

        <?php

            if (str_contains($_SERVER['REQUEST_URI'],'data_manipulation') == true)
                {

        ?>

                </details>

                <details class="details">

                    <summary class="summary">More Information</summary>

                </details>

        <?php
        
                }

        ?>

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

    <div id="DataManipulationDetailsOfService" class="text">
    
        <h3 class="item--Heading">Data Manipulation with PHD Technology</h3>
        
        <p>
            TEST. This paragraph should only be visible in the specific service page, not on the homepage.
        </p>

    </div>

    <?php
            }
    ?>

</div>