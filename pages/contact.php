<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        
        //    ./ = page is located in the root directory
        //    ../ = page is located one folder up
        //    ../../ = page is located two folders up, etc

        // set the site root folder in relation to this page
        $path = "../";        
        
        // set the page title
        $subTitle = "Contact";

    // IMPORT SITE WIDE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************

        include($path."assets/includes/sections/site_details.php"); 

    // HEADER
    // ****************************************************************************************************************************************
        
        include($path."assets/includes/sections/header.php");

    // MAIN PAGE
    // #########################################################################################################################################

?>
        
<div>
    
    <form action="">
        <input type="text" id="" name="" placeholder="Name">
        <input type="text" id="" name="" placeholder="Email@Address">
        <input type="text" id="" name="" placeholder="Telephone number">
        <textarea name="" id="" placeholder="What is the nature of your enquiry?"></textarea>
        <button name="" id="">Submit</button>
        <button name="" id="">Clear</button>
    </form>
    
</div>

<?php
    
    // FOOTER
    // #########################################################################################################################################
    
        include($path."assets/includes/sections/footer.php");

?>