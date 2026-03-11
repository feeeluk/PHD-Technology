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

    <div id="Contact" class="box">

        <div class="introSection">

            <h3 class="item--Title">
                Contact us
            </h3>
            
            <p>
                Call us on 01482 653509, or use the form below.
            </p>

        </div>

        <div id="ContactFormBox" class="box--WithPadding item">
        
            <form id="ContactForm" action="<?php echo $path.'assets/includes/components/about/send.php'; ?>" method="post">
                
                <input type="text" id="NameInput" name="name" placeholder="Name">
                <input type="email" id="EmailInput" name="email" placeholder="Email@Address">
                <input type="text" id="TelephoneInput" name="telephone" placeholder="Telephone number">
                <textarea id="MessageTextarea" name="message" placeholder="What is the nature of your enquiry?"></textarea>
                
                <button type="reset" id="ClearButton" name="clear">Clear</button>  
                <button id="SubmitButton" name="submit">Submit</button>  
                                    
            </form>
    
        </div>

    </div>

<?php
        
    // HTML 2
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_2.php");
    
?>