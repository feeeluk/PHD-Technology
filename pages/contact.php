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

    // HEADER
    // ****************************************************************************************************************************************   
        include($path."assets/includes/components/header.php");

    // MAIN PAGE
    // _________________________________________________________________________________________________________________________________________

?>
    <article id="contact">

        <h1 class="margin_top">CONTACT</h1>

        <section>

            <div>
                
                <form id="contact_form" action="">

                    <p>Contact us using the form below, or call us on 0012 3456 789</p>
                    
                    <input type="text" id="" name="" placeholder="Name">
                    <input type="text" id="" name="" placeholder="Email@Address">
                    <input type="text" id="" name="" placeholder="Telephone number">
                    <textarea name="" id="" placeholder="What is the nature of your enquiry?"></textarea>
                    <span>
                        <button name="" id="">Clear</button>  
                        <button name="" id="">Submit</button>  
                    </span>
                                        
                </form>
                
            </div>
        
        </section>

    </article>


<?php
    
    // FOOTER
    // ****************************************************************************************************************************************
        include($path."assets/includes/components/footer.php");

?>