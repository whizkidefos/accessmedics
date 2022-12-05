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
                <h4>Head Office</h4>
                <p>
                    6th Floor, 120 Bark Street <br>
                    Bolton, Greater Manchester <br>
                    BL1 2AX
                </p>
                <hr>
                <p>info@accessmedics.co.uk</p>
                <p>0120 477 7447</p>
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