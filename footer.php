
<footer>
    <div class="uk-container">
        <div class="uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid>
            <div>
                <h4><i class="fa-solid fa-location-dot"></i> Address Info</h4>
                <p>
                    6th Floor, 120 Bark Street
                    Bolton, Greater Manchester
                    BL1 2AX
                </p>
            </div>
            <div>
                <h4><i class="fa-solid fa-address-book"></i> Phone & Email</h4>
                <p>
                    0120 477 7447 <br>
                    info@accessmedics.co.uk <br>
                    recruitment@accessmedics.co.uk
                </p>
            </div>
            <div>
                <h4><i class="fa-solid fa-clock"></i> Office opening hours</h4>
                <p>
                    Mon-Fri: 9:00am - 5:00pm <br>
                    Saturday: Closed <br>
                    Sunday: Closed
                </p>
            </div>
            <div>
                <h4><i class="fa-solid fa-square-up-right"></i> Quick Links</h4>
                <?php
                    $args = array(
                        'theme_location' => 'footer-menu',
                        'container'      => 'nav',
                        'container_class'=> 'footer-menu'
                    );
                    wp_nav_menu( $args );
                ?>
            </div>
        </div>
    </div>
    <hr>
    <div class="uk-container uk-text-center">
        <small>
            Copyright 2022 © Access Medics Ltd, Registered in England & Wales, Company Reg: 11793192.
        </small>
        <br>
        <small class="footer-links">
            <a href="/privacy-policy" target="_blank">Privacy Policy</a>
            <a href="/terms-of-service" target="_blank">Terms of Service</a>
        </small>
    </div>
</footer>

<?php get_template_part('/components/bact-to-top'); ?>

<?php wp_footer(); ?>
</body>
</html>