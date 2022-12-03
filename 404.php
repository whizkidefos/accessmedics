<?php get_header(); ?>

<header class="page-header">
    <div class="uk-container">
        <section class="page-header-grid">
            <div class="page-header-left"></div>
            <div class="page-header-right">
                <h1>404 | page not found!</h1>
            </div>
        </section>
    </div>
</header>

<section class="page-content">
    <div class="uk-container">
        <p>
            The page you're looking for has either moved or does not exist on this website.
            Find your way around using the navigation above or any of the buttons below.
        </p>
        <div class="uk-text-center">
            <a href="<?php echo home_url(); ?>" class="blue-btn">Go back home</a>
            <a href="<?php echo home_url(); ?>/contact-us" class="blue-btn">Get in touch</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>