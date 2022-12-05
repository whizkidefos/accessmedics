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
    <div class="uk-container uk-container-small uk-text-center uk-padding-small">
        <p>
            Unforeseen circumstances can make the simplest activities of daily living challenging. Access Medics provides personal care services allowing our clients to maintain their lifestyle in the comfort and familiarity of their homes. Our professional and trustworthy carers ensure you or your loved one are healthy and safe, by providing assistance with many different personal care activities ranging from a few hours to 24-hours a day.
        </p>
       <a href="<?php echo home_url(); ?>/get-started" class="blue-btn">Get started</a>
    </div>
</section>

<section class="home-care-help">
    <div class="uk-container uk-text-center">
        <h3>Access Medics can help</h3>
        <p class="uk-container uk-container-small uk-margin-auto">At Access Medics, we select the best, most-skilled carers in advance so they’re ready to provide the care you want, right when you need it.</p>
        <div class="uk-child-width-1-4@l uk-child-width-1-2@m uk-grid-match uk-margin-large-top" uk-grid>
            <div>
                <div class="uk-card uk-card-default">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/reminders.png" ?>" alt="medication reminders">
                    <h4>Medication Reminders</h4>
                    <p>Timely prompts to take medication, drink water, and other daily wellness needs.</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/staying-active.png" ?>" alt="Staying Active">
                    <h4>Staying Active</h4>
                    <p>Timely prompts to take medication, drink water, and other daily wellness needs.</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/meal-prep.png" ?>" alt="Meal Prep & Groceries">
                    <h4>Meal Prep & Groceries</h4>
                    <p>Timely prompts to take medication, drink water, and other daily wellness needs.</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/transportation.png" ?>" alt="Transportation">
                    <h4>Transportation</h4>
                    <p>Timely prompts to take medication, drink water, and other daily wellness needs.</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/housekeeping.png" ?>" alt="Light Housekeeping">
                    <h4>Light Housekeeping</h4>
                    <p>Timely prompts to take medication, drink water, and other daily wellness needs.</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/personal-care.png" ?>" alt="Personal Care & Hygiene">
                    <h4>Personal Care & Hygiene</h4>
                    <p>Timely prompts to take medication, drink water, and other daily wellness needs.</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/companionship.png" ?>" alt="Companionship">
                    <h4>Companionship</h4>
                    <p>Timely prompts to take medication, drink water, and other daily wellness needs.</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/check-in-visits.png" ?>" alt="Check-in Visits">
                    <h4>Check-in Visits</h4>
                    <p>Timely prompts to take medication, drink water, and other daily wellness needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('/components/get-in-touch'); ?>

<?php get_footer(); ?>