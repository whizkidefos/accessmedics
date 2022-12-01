<?php get_header(); ?>

<header class="page-header">
    <div class="uk-container">
        <div class="uk-card uk-card-default uk-card-body">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</header>

<section class="page-content">
    <div class="uk-container">
        <?php the_content(); ?>
    </div>
</section>

<?php get_footer(); ?>