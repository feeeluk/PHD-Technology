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
     

        // Decode json errors array
        $errors = [];

        if (isset($_GET['errors'])) {
            $errors = json_decode($_GET['errors'], true);
        }

        // Decode json data array
        $data = [];

        if (isset($_GET['data'])) {
            $data = json_decode($_GET['data'], true);
        }

        // Submit attempt counter
        $attempt = isset($_GET['attempt']) ? (int)$_GET['attempt'] : 0;

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

            if (isset($_GET['status']) && $_GET['status'] === 'success') {
                
                echo "<div class='box--WithPadding item'>";
                echo    "<p class='success'>";
                echo        "Thank you — your message has been sent.";
                echo    "</p>";
                echo "</div>";

            }

            if (isset($_GET['status']) && $_GET['status'] === 'error') {

                echo "<div class='box--WithPadding item'>";
                echo    "<p class='success'>";
                echo        "There was an error — your message has not been sent. Please try again";
                echo    "</p>";
                echo "</div>";

            }

            if (isset($_GET['status']) && $_GET['status'] === 'validation_error') {

                echo "<div class='box--WithPadding item'>";
                echo    "<p class='success'>";
                echo        "There was something wrong with the form — please check it, amend it, and try again. Thank you.";
                echo    "</p>";
                echo "</div>";
            }
            
            if (!isset($_GET['status']) || $_GET['status'] !== 'success') :
            
        ?>

            <div id="ContactFormBox" class="box--WithPadding item">

                <h3>
                    Enquiry Formmmmmmmmmmmmmmmmmm
                </h3>

                <?php if ($attempt > 0): ?>
    <div class="submit-attempt">
        <p>You pressed submit <?php echo $attempt; ?> time<?php echo $attempt > 1 ? 's' : ''; ?>.</p>
    </div>
<?php endif; ?>

                <form id="ContactForm" action="<?php echo $path.'assets/includes/components/contact/send.php'; ?>" method="post">
                    
                    <input type="hidden" name="attempt" value="<?php echo $attempt ?? 0; ?>">
                    
                    <input
                        type="text"
                        id="NameInput"
                        name="name"
                        value="<?php echo isset($errors['name']) ? '' : ($data['name'] ?? ''); ?>"
                        placeholder="<?php echo $errors['name'] ?? 'Your name'; ?>"
                        class="<?php echo isset($errors['name']) ? 'error' : ''; ?>"
                        >

                    <input
                        type="email"
                        id="EmailInput"
                        name="email"
                        value="<?php echo isset($errors['email']) ? '' : ($data['email'] ?? ''); ?>"
                        placeholder="<?php echo $errors['email'] ?? 'Your email address'; ?>"
                        class="<?php echo isset($errors['email']) ? 'error' : ''; ?>"
                        >

                    <input
                        type="text"
                        id="TelephoneInput"
                        name="telephone"
                        value="<?php echo isset($errors['telephone']) ? '' : ($data['telephone'] ?? ''); ?>"
                        placeholder="<?php echo $errors['telephone'] ?? 'Your telephone'; ?>"
                        class="<?php echo isset($errors['telephone']) ? 'error' : ''; ?>"
                        >

                    <textarea
                        id="MessageTextarea"
                        name="message"
                        placeholder="<?php echo $errors['message'] ?? 'Your message'; ?>"
                        class="<?php echo isset($errors['message']) ? 'error' : ''; ?>"><?php echo isset($errors['message']) ? '' : ($data['message'] ?? ''); ?></textarea>
                    
                    <button type="reset" id="ClearButton" name="clear">
                        Clear
                    </button>  
                    
                    <button id="SubmitButton" name="submit">
                        Submit
                    </button>  
                                        
                </form>
        
            </div>

        <?php
    
            endif;
            
        ?>

    </div>

<?php
        
    // HTML 2
    // ****************************************************************************************************************************************
    include($path."assets/includes/components/page/html_2.php");
    
?>