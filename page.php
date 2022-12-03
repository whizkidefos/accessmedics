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
        <?php the_content(); ?>
    </div>
</section>

<?php get_footer(); ?>