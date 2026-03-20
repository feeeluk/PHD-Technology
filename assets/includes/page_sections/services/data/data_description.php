<a id="DataAnchor" class="anchor"></a>

<div id="DataDescription" class="box--WithPadding item">

    <h1 class='item--Title'>DATA</h1>

    <div id="DataSummaryOfService" class="text">            

        <img src="/assets/images/services/data/data.webp" alt="Data" class="img--FloatLeft">

        <p>
            There are many different aspects when it comes to data:
        </p>
        
        <p>
            <b>Data Management</b>
            <br>
            The overall discipline of organising, storing, governing, and maintaining data so it’s accurate, secure, and usable across the business. 
        </p>

        <p>
            <b>Data Integration</b>
            <br>
            Connecting data from different systems—CRMs, finance tools, spreadsheets, legacy databases—so information flows smoothly and stays consistent.
        </p>

        <p>
            <b>Data Migration</b>
            <br>
            Moving data from one system to another—often part of digital transformation or system upgrades—while preserving quality and continuity.
        </p>

        <p>
            <b>Analytics & Reporting</b>
            Turning raw data into insights through dashboards, reports, KPIs, and analysis that support decision‑making.
        </p>

    </div>
            
    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'data') == false)
            {
                $link = "pages/services/data.php";
                $aria = "Link to Data services page";
                
                echo "<div class='clickForDetails'>";
                
                    include($root."/assets/includes/components/services/button_click_for_details.php");

                echo "</div>";

            }

        if (str_contains($_SERVER['REQUEST_URI'],'data') == true)
            {

    ?>

    <div id="DataDetailsOfService" class="text">
    
        <h2 class="item--Heading">Data with PHD Technology</h2>
        
        <p>
            Our goal is always the same:</p>
        
        <ul>
            <li>To turn data into meaningful information.</li>
            <li>To turn information into actionable knowledge.</li>
        </ul>
        
        <p> 
            Deriving meaning from data gives organisations clarity they can act on. We focus on improving the quality, structure, and flow of data so it becomes something teams can trust and use. Clean, connected data supports clearer reporting, sharper insight, and better decisions.</p>

    </div>

    <?php
            }
    ?>

</div>