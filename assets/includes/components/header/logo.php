<div id="LogoContainer">

    <a href="/" aria-label="Link to Homepage">

        <?php

            if ($is_live) {
                $logo = "/assets/images/header/logo.webp"; 
            } else {
                $logo = "/assets/images/header/logo_test_environment.webp";
            }

        ?>

        <img src="<?= $logo ?>" alt="logo" class="logo">

    </a>
        
</div>