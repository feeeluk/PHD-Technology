<?php
    
    // SET PAGE DETAILS, VARIABLES, & CONSTANTS
    // ****************************************************************************************************************************************
        
        // set the site root folder in relation to this page
        $path = "../";

            //    ./ = page is located in the root directory
            //    ../ = page is located one folder up
            //    ../../ = page is located two folders up, etc       
        
        // set the page title
        $subTitle = "Contact";

        // Set page META tags.
        $metaDescription = "Contact";
        $metaKeywords ="Contact, Contact Form, Contact Us, Email, Telephone";

    // HTML 1
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_1.php");
    

        // PAGE CONTENTS HERE
     
?>

    <div id="Contact" class="box--WithPadding item">

        <h3 class="item--Title">Contact us using the form below, or call us on 01482 653509</h3>
        
        <form id="ContactForm" action="null">
            
            <input type="text" id="NameInput" name="Name" placeholder="Name">
            <input type="text" id="EmailInput" name="Email" placeholder="Email@Address">
            <input type="text" id="TelephoneInput" name="Telephone" placeholder="Telephone number">
            <textarea id="EnquiryInput" name="Enquiry" placeholder="What is the nature of your enquiry?"></textarea>
            
            <button id="ClearButton" name="Clear">Clear</button>  
            <button id="SubmitButton" name="Submit">Submit</button>  
                                
        </form>
        
    </div>

<?php
        
    // HTML 2
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_2.php");
    
?>