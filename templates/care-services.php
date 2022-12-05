<?php get_header();
/** Template Name: Care Services */
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
    <div class="uk-container">
        
        <div class="uk-child-width-expand@s" uk-grid>
            <div class="uk-width-2-3@m">
                <div class="uk-card uk-card-default uk-card-body">
                    <?php the_content(); ?>
                    <br>
                    <a href="<?php echo home_url(); ?>/get-started" class="blue-btn">Get started</a>
                </div>
            </div>
            <div class="uk-width-1-3@m">
                <div class="uk-card uk-card-default uk-card-body">
                    <p>
                        Our carers uphold our reputation and are valued in the community. They are themselves part of our own community of special people wanting to deliver the highest standard of care – upholding the principles of kindness and compassion – to give our clients dignity and respect and their families the greatest gift of all – peace of mind.
                    </p>
                </div>
            </div>
        </div>
        
    </div>
</section>

<?php get_template_part('/components/get-in-touch'); ?>

<?php get_footer(); ?>