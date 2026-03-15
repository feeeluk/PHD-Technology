<div id="LogoContainer">

    <a href="/">

        <?php

            $isLocal = in_array($_SERVER['SERVER_NAME'], ['localhost', '127.0.0.1']);


            if ($isLocal) {
                $logo = "/assets/images/header/logo_test_environment.webp"; 
            } else {
                $logo = "/assets/images/header/logo.webp";
            }

        ?>

        <img src="<?= $logo ?>" alt="logo" class="logo">

    </a>
        
</div>