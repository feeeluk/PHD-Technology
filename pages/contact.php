<?php
    
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");      
        
    // Set the page title.
    $subTitle = "Contact";

    // Set page meta tags.
    $metaDescription = "Contact";
    $metaKeywords ="Contact, Contact Form, Contact Us, Email, Telephone";

    // HTML 1
    // ****************************************************************************************************************************************
    include($root."/assets/includes/components/page/html_1.php");
    

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

            <h1 class="item--Title">
                Contact us
            </h1>
            
            <p>
                Phone: 01482 653509 
                <br>
                Email: hello@pdhtechnology.com
            </p>

        </div>

        <?php

            if (isset($_GET['status']) && $_GET['status'] === 'success') {
                
                echo "<div class='box--WithPadding item success'>";
                echo    "<h3 class=''>";
                echo        "Success!";
                echo    "</h3>";
                echo    "<p class=''>";
                echo        "Your message has been successfully sent. Please expect to hear from us soon.";
                echo    "</p>";
                echo "</div>";

            }

            if (isset($_GET['status']) && $_GET['status'] === 'error') {

                echo "<div class='box--WithPadding item error'>";
                echo    "<h3 class=''>";
                echo        "Error!";
                echo    "</h3>";
                echo    "<p class=''>";
                echo        "Your message has not been sent. Please try again.<br>";
                            if ($attempt > 0)
                            {
                                echo " (attempt #".$attempt.")";
                            }
                echo    "</p>";
                echo "</div>";

            }

            if (isset($_GET['status']) && $_GET['status'] === 'validation_error') {

                echo "<div class='box--WithPadding item error'>";
                echo    "<h3 class=''>";
                echo        "Validation Error!";
                echo    "</h3>";
                echo    "<p class=''>";
                echo        "Your message has not been sent. Please correct the form and try again.<br>";
                            if ($attempt > 0)
                            {
                                echo " (attempt #".$attempt.")";
                            }
                echo    "</p>";
                echo "</div>";
            }
            
            if (!isset($_GET['status']) || $_GET['status'] !== 'success') :
            
        ?>

            <div id="ContactFormBox" class="box--WithPadding item">

                <h3>
                    Enquiry Form
                </h3>

                <form id="ContactForm" action="<?= $path.'assets/includes/components/contact/contact_form_submit.php'; ?>" method="post">
                    
                    <input type="hidden" name="attempt" value="<?php echo $attempt ?? 0; ?>">
                    
                    <input
                        type="text"
                        id="NameInput"
                        name="name"
                        value="<?php echo isset($errors['name']) ? '' : ($data['name'] ?? ''); ?>"
                        placeholder="<?php echo $errors['name'] ?? 'Your name'; ?>"
                        class="<?php echo isset($errors['name']) ? 'validationError' : ''; ?>"
                        >

                    <input
                        type="email"
                        id="EmailInput"
                        name="email"
                        value="<?php echo isset($errors['email']) ? '' : ($data['email'] ?? ''); ?>"
                        placeholder="<?php echo $errors['email'] ?? 'Your email address'; ?>"
                        class="<?php echo isset($errors['email']) ? 'validationError' : ''; ?>"
                        >

                    <input
                        type="text"
                        id="TelephoneInput"
                        name="telephone"
                        value="<?php echo isset($errors['telephone']) ? '' : ($data['telephone'] ?? ''); ?>"
                        placeholder="<?php echo $errors['telephone'] ?? 'Your telephone'; ?>"
                        class="<?php echo isset($errors['telephone']) ? 'validationError' : ''; ?>"
                        >

                    <textarea
                        id="MessageTextarea"
                        name="message"
                        placeholder="<?php echo $errors['message'] ?? 'Your message'; ?>"
                        class="<?php echo isset($errors['message']) ? 'validationError' : ''; ?>"><?php echo isset($errors['message']) ? '' : ($data['message'] ?? ''); ?></textarea>
                    
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
    include($root."/assets/includes/components/page/html_2.php");
    
?>