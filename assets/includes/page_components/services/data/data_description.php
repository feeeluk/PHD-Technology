<a id="DataAnchor" class="anchor"></a>

<div id="DataDescription" class="box--WithPadding item">

    <h1 class='item--Title'>DATA</h1>

    <div id="DataSummaryOfService" class="text">            

        <img src="/assets/images/services/data/overview_data.webp" alt="Data" class="text--FloatLeft">         
    
        <p>
            Data is the process of adjusting, organizing, or transforming data to make it more meaningful, accurate, or useful. It’s often done to prepare data for analysis, reporting, or decision-making.
        </p>

        <p>
            In simple terms, it’s about taking raw data and changing it into a cleaner, more usable form.
        </p>

    </div>
            
    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'data') == false)
            {
                $link = "pages/services/data.php";
                
                echo "<div class='clickForDetails'>";
                
                    include($path."assets/includes/components/services/button_click_for_details.php");

                echo "</div>";

            }

        if (str_contains($_SERVER['REQUEST_URI'],'data') == true)
            {

    ?>

    <div id="DataDetailsOfService" class="text">
        
        <details class="details">

            <summary class="summary">More Information</summary>

        </details>
    
        <h2 class="item--Heading">Data with PHD Technology</h2>
        
        <p>
            TEST. This paragraph should only be visible in the specific service page, not on the homepage.
        </p>

    </div>

    <?php
            }
    ?>

</div>