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
        include($path."assets/includes/sections/header.php");

    // MAIN PAGE
    // _________________________________________________________________________________________________________________________________________

?>

<article class="contact">

        <section class="contact_left">
            
            <h1>CONTACT</h1>
            
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.  
            </p>

            <p>
                Contact us directly:
            </p>
            
            <p>
                Phone: 01482 123456
            </p>
            
            <p>
                Email: test@test.com
            </p>

        </section>

        <section class="contact_right">

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
        
        </section>

    </article>


<?php
    
    // FOOTER
    // ****************************************************************************************************************************************
        include($path."assets/includes/sections/footer.php");

?>