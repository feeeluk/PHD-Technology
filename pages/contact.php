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
                Phone: 01482 653509 
            </p>

            <p>
                Email: philiphenning@outlook.com
            </p>

        </div>

        <?php

            if (isset($_GET['status']) && $_GET['status'] === 'error') {

                echo "<div class='box--WithPadding item'>";
                echo    "<p class='success'>";
                echo        "There was an error — your message has not been sent. Please try again";
                echo    "</p>";
                echo "</div>";

            }

        ?>

        <?php

            if (isset($_GET['status']) && $_GET['status'] === 'success') {
                
            echo "<div class='box--WithPadding item'>";
            echo    "<p class='success'>";
            echo        "Thank you — your message has been sent.";
            echo    "</p>";
            echo "</div>";

            }

            if (!isset($_GET['status']) || $_GET['status'] === 'error') {
        
        ?>


        <div id="ContactFormBox" class="box--WithPadding item">

            <h3>
                Enquiry Form
            </h3>
        
            <form id="ContactForm" action="<?php echo $path.'assets/includes/components/contact
            /send.php'; ?>" method="post">
                
                <input type="text" id="NameInput" name="name" placeholder="Name">
                    
                    <!-- <?php
                        
                        if (isset($_GET['status']) && $_GET['status'] === 'error') {
                            
                            echo $name;
                            
                        }

                        else {

                            echo "Name";

                            }
                    ?>
                    
                "> -->

                <input type="email" id="EmailInput" name="email" placeholder="Email@Address">

                <input type="text" id="TelephoneInput" name="telephone" placeholder="Telephone number">

                <textarea id="MessageTextarea" name="message" placeholder="What is the nature of your enquiry?">
                </textarea>
                
                <button type="reset" id="ClearButton" name="clear">Clear</button>  
                <button id="SubmitButton" name="submit">Submit</button>  
                                    
            </form>
    
        </div>

        <?php

            }

        ?>

    </div>

<?php
        
    // HTML 2
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_2.php");
    
?>