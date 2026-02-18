<?php
    
    // SET PAGE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************
        
        // set the site root folder in relation to this page
        $path = "../";

            //    ./ = page is located in the root directory
            //    ../ = page is located one folder up
            //    ../../ = page is located two folders up, etc       
        
        // set the page title
        $subTitle = "Contact";

    // HTML 1
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_1.php");
    

        // PAGE CONTENTS HERE
     
        ?>

            <div id="Contact" class="box--WithPadding item">

                <h3 class="item--Heading">Contact us using the form below, or call us on 0012 3456 789</h3>
                
                <form id="ContactForm" action="">
                    
                    <input type="text" id="" name="" placeholder="Name">
                    <input type="text" id="" name="" placeholder="Email@Address">
                    <input type="text" id="" name="" placeholder="Telephone number">
                    <textarea name="" id="" placeholder="What is the nature of your enquiry?"></textarea>
                    
                    <button name="" id="">Clear</button>  
                    <button name="" id="">Submit</button>  
                                        
                </form>
                
            </div>

        <?php
        
    // HTML 2
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_2.php");
    
?>