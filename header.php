<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . "/assets/favicon.png" ?>" type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <section class="secondary-nav">
            <div class="secondary-nav-left">
                <a href="tel:01204777447"><i class="fa-solid fa-phone"></i> 0120 477 7447</a>
                <a href="mailto:info@accessmedics.co.uk"><i class="fa-solid fa-envelope"></i> info@accessmedics.co.uk</a>
            </div>
            <div class="secondary-nav-right">
                <a href="https://www.facebook.com/people/Access-Medics-Limited/100068469613851/" target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="https://twitter.com/accessmedicsltd" target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="https://www.linkedin.com/company/access-medics-limited/about/" target="_blank">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>
        </section>
        <section class="primary-nav">
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri() . "/assets/logo-access-medics.png" ?>" alt="Logo">
            </a>
            <div class="primary-nav-links">
                <?php
                    $args = array(
                        'theme_location' => 'main-menu',
                        'container'      => 'nav',
                        'container_class'=> 'main-menu'
                    );
                    wp_nav_menu( $args );
                ?>
                <div class="application-button-mobile">
                    <a href="/apply-now" class="blue-btn">Apply Now</a>
                </div>
            </div>
            <div class="application-button">
                <a href="/apply-now" class="blue-btn">Apply Now</a>
            </div>
        </section>

        <div class="burger">
            <span class="burger-bar"></span>
        </div>
    </header>