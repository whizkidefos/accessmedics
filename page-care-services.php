<?php get_header(); ?>

<header class="page-header">
    <div class="uk-container">
        <section class="page-header-grid">
            <div class="page-header-left"></div>
            <div class="page-header-right">
                <h1><?php the_title(); ?></h1>
            </div>
        </section>
    </div>
</header>

<section class="page-content">
    <div class="uk-container uk-container-small uk-text-center">
        <?php the_content(); ?>
    </div>

    <div class="uk-container uk-text-center care-service-cards">
        <div class="uk-child-width-1-4@l uk-child-width-1-2@m uk-flex-center" uk-grid>
            <div>
                <a href="<?php echo home_url(); ?>/home-care" class="care-service-card">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/slides/homecare-slide.jpg" ?>" alt="Home care">
                    <h5>Home Care</h5>
                    <p>Personal care services in the comfort and familiarity of our client homes.</p>
                </a>
            </div>
            <div>
                <a href="<?php echo home_url(); ?>/live-in-care" class="care-service-card">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/services/live-in-care.jpg" ?>" alt="Live-in care">
                    <h5>Live in Care</h5>
                    <p>Live-in care is a personal one-to-one service that is tailored to the needs of each individual.</p>
                </a>
            </div>
            <div>
                <a href="<?php echo home_url(); ?>/hospital-to-home" class="care-service-card">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/slides/access-medics-slide-01.jpg" ?>" alt="Hospital to home care">
                    <h5>Hospital to Home</h5>
                    <p>Our hospital to home service can enable you to return home after a stay in the hospital.</p>
                </a>
            </div>
            <div>
                <a href="" class="care-service-card">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/nurse-care.jpg" ?>" alt="Respite care">
                    <h5>Respite Care</h5>
                    <p>Temporary care, which provides family caregivers relief from the full-time responsibility.</p>
                </a>
            </div>
            <div>
                <a href="" class="care-service-card">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/services/end-of-life.jpg" ?>" alt="End of life care">
                    <h5>End of Life</h5>
                    <p>We can provide comforting, end-of-life care for your loved one and assist the family during transition.</p>
                </a>
            </div>
            <div>
                <a href="" class="care-service-card">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/services/supported-living.jpg" ?>" alt="Supported living">
                    <h5>Supported Living</h5>
                    <p>Here at Access Medics, we believe in enjoying a life that is full of purpose.</p>
                </a>
            </div>
            <div>
                <a href="" class="care-service-card">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/senior-care.jpg" ?>" alt="Specialist care">
                    <h5>Specialist Care</h5>
                    <p>Access Medics is a specialist care provider providing service for adult clients.</p>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('/components/get-in-touch'); ?>

<?php get_footer(); ?>