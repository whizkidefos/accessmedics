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
    <div class="uk-container">
        <div class="uk-child-width-1-2@m" uk-grid>
            <div class="contact-us-content">
                <h3>Get in touch</h3>
                <p>
                    Please feel free to get in touch with our head office using the details listed below. Our friendly staff are on hand 24/7 to offer any kind of assistance, whether that’s a chat about your staffing requirements or to answer any questions you may have about our recruitment process.
                </p>
                <hr>
                <h4><i class="fa-solid fa-location-crosshairs"></i> Head Office</h4>
                <p>
                    6th Floor, 120 Bark Street <br>
                    Bolton, Greater Manchester <br>
                    BL1 2AX
                </p>
                <hr>
                <a href="mailto:info@accessmedics.co.uk"><i class="fa-solid fa-envelope"></i> info@accessmedics.co.uk</a> <br>
                <a href="tel:0120 477 7447"><i class="fa-solid fa-mobile-retro"></i> 0120 477 7447</a>
                <div class="cqc-container">
                    <script type="text/javascript" src="//www.cqc.org.uk/sites/all/modules/custom/cqc_widget/widget.js?data-id=1-7881770313&amp;data-host=www.cqc.org.uk&amp;type=location"></script>
                </div>
            </div>
            <div>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>