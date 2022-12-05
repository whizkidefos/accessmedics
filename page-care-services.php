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
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/nurse-care-smiling-patient.jpg" ?>" alt="Home care">
                    <h5>Home Care</h5>
                    <p>Unforeseen circumstances can make the simplest activities of daily living challenging...</p>
                </a>
            </div>
            <div>
                <a href="<?php echo home_url(); ?>/live-in-care" class="care-service-card">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/nurse-care-smiling-patient.jpg" ?>" alt="Home care">
                    <h5>Live in Care</h5>
                    <p>We believe that moving people away from their own homes where they’ve lived for many...</p>
                </a>
            </div>
            <div>
                <a href="<?php echo home_url(); ?>/hospital-to-home" class="care-service-card">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/nurse-care-smiling-patient.jpg" ?>" alt="Home care">
                    <h5>Hospital to Home</h5>
                    <p>One of the leading causes of hospital readmission or slow post-hospitalisation...</p>
                </a>
            </div>
            <div>
                <a href="" class="care-service-card">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/nurse-care-smiling-patient.jpg" ?>" alt="Home care">
                    <h5>Respite Care</h5>
                    <p>Respite Care is temporary care, which provides family caregivers relief from the full-time...</p>
                </a>
            </div>
            <div>
                <a href="" class="care-service-card">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/nurse-care-smiling-patient.jpg" ?>" alt="Home care">
                    <h5>End of Life</h5>
                    <p>We can provide comforting, end-of-life care for your loved one and assist the family during...</p>
                </a>
            </div>
            <div>
                <a href="" class="care-service-card">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/nurse-care-smiling-patient.jpg" ?>" alt="Home care">
                    <h5>Supported Living</h5>
                    <p>Here at Access Medics, we believe in enjoying a life that is full of purpose and realising...</p>
                </a>
            </div>
            <div>
                <a href="" class="care-service-card">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/nurse-care-smiling-patient.jpg" ?>" alt="Home care">
                    <h5>Specialist Care</h5>
                    <p>Access Medics is a specialist care provider providing service for adult clients...</p>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('/components/get-in-touch'); ?>

<?php get_footer(); ?>