<?php get_header();
/** Template Name: Get started */
?>

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
    <div class="uk-container uk-container-small">
        <h2 class="uk-text-center uk-padding page-template-subtitle">Provide us with the requested information and we’ll be in touch.</h2>
        <div class="uk-child-width-1-3@m uk-grid-match uk-text-center get-started-cards" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-padding get-started-card">
                    <h3>1</h3>
                    <p>Leave your information and we’ll contact you to answer your questions.</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-padding get-started-card">
                    <h3>2</h3>
                    <p>We’ll get in touch to get to know you a bit better.</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-padding get-started-card">
                    <h3>3</h3>
                    <p>We’ll then schedule your care assessment at your convenience.</p>
                </div>
            </div>
        </div>
        <?php the_content(); ?>
    </div>
</section>

<?php get_footer(); ?>