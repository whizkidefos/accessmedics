<section class="banner">
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="min-height: 300; max-height: 600; animation: fade; autoplay: true; autoplay-interval: 5000">

        <ul class="uk-slideshow-items">
            <li>
                <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/slides/access-medics-slide-01.jpg" ?>" alt="female nurse" uk-cover>
                </div>
                
                <div class="uk-position-cover" uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"></div>

                <div class="uk-overlay uk-overlay-default uk-position-center uk-position-small uk-text-center">
                    <small>Access Medics</small>
                    <h3 class="uk-margin-remove">Quality Care at Home Services.</h3>
                    <br>
                    <a href="/home-care" class="blue-btn">Learn More</a>
                </div>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . "/assets/images/slides/healthcare-staff-slide.jpg" ?>" alt="male nurse" uk-cover>
                <div class="uk-overlay uk-overlay-default uk-position-center uk-position-small uk-text-center">
                    <small>We are recruiting</small>
                    <h3 class="uk-margin-remove">Nurses, Care Assistants & Support Workers.</h3>
                    <br>
                    <a href="/apply-now" class="blue-btn">Apply Now</a>
                </div>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . "/assets/images/slides/homecare-slide.jpg" ?>" alt="home care" uk-cover>
                <div class="uk-overlay uk-overlay-default uk-position-center uk-position-small uk-text-center">
                    <small>Access Medics</small>
                    <h3 class="uk-margin-remove">Home Care Your Family With Love.</h3>
                    <br>
                    <a href="/home-care" class="blue-btn">Learn More</a>
                </div>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . "/assets/images/slides/access-medics-slide-02.jpg" ?>" alt="female nurse" uk-cover>
                <div class="uk-overlay uk-overlay-default uk-position-center uk-position-small uk-text-center">
                    <small>Trained & Vetted</small>
                    <h3 class="uk-margin-remove">Our Staff are Carefully Selected.</h3>
                    <br>
                    <a href="/home-care" class="blue-btn">Learn More</a>
                </div>
            </li>
        </ul>

        <div class="uk-light">
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
        </div>

    </div>
</section>

<section class="uk-container uk-text-center cta-block">
    <div class="uk-child-width-1-3@m" uk-grid>
        <div>
            <a href="<?php echo home_url(); ?>/get-started"><h3><i class="fa-solid fa-clipboard-user"></i> Are you looking for staff?</h3></a>
        </div>
        <div>
            <a href="<?php echo home_url(); ?>/apply-now"><h3><i class="fa-solid fa-user-nurse"></i> Are you looking for work?</h3></a>
        </div>
        <div>
            <a href="<?php echo home_url(); ?>/get-started"><h3><i class="fa-solid fa-hospital-user"></i> Are you looking for care?</h3></a>
        </div>
    </div>
</section>