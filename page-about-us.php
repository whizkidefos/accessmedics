<?php get_header(); 
/* Template Name: About Us*/
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
    <div class="uk-container uk-container-small uk-text-center about-us-content">
        <h3>Providing exceptional care and recruitment solutions in various Health and Social Care sectors.</h3>
        <p>
            Access Medics have been founded by a group of directors that are all highly qualified and specialised in multiple areas across the healthcare sector, such as- mental health nursing, social care, elderly care and business management.
        </p>
    </div>
    <div class="custom-divider"></div>

    <div class="uk-container">
        <section class="custom-flex">
            <article>
                <h4>Professional, efficient and personable</h4>
                <p>
                    Everything about Access Medics stands for quality, whether it’s the service we provide or the staff we employ, we want to make sure that our staff can offer the very best service in their work, no matter how small the task.

                    In order to do this, we look at every detail and make sure we perform it to the highest level. From assisting with cleaning and cooking to more sensitive roles working with dementia patients, our staff are consistently professional, friendly and efficient.
                </p>
            </article>
            <figure>
                <img src="<?php echo get_template_directory_uri() . "/assets/images/nurse-care-smiling-patient.jpg" ?>" alt="access medics">
            </figure>
        </section>
        <section class="custom-flex-alt">
            <figure>
                <img src="<?php echo get_template_directory_uri() . "/assets/images/nurse-care-smiling-patient.jpg" ?>" alt="access medics">
            </figure>
            <article>
                <h4>Our Service Standards</h4>
                <p>
                    We are a specialist recruiter for jobs within the healthcare industry. This means we strive to only hire people who have the required knowledge, experience and ability to ensure our clients get the best standard of service they could ask for and in particular, Access Medics aims to recruit individuals who have experience working with the elderly.

                    Access Medics always provides an extensive and outstanding level of care and service to each and every one of our clients. We do this matching up our recruits to roles that allow them to thrive and make a real difference.
                </p>
            </article>
        </section>
        <section class="custom-flex">
            <article>
                <h4>Quality Personnel Service</h4>
                <p>
                    Access Medics and are currently able to offer an extensive number of services to meet our clients’ needs. Our staffing specialities include supplying registered nurses, support workers, social workers, carers, allied healthcare professionals and cleaners to hospitals, nursing homes and other healthcare clients in Bolton and beyond.

                    Our current clients encompass care and residential homes, charities, local authorities, private hospitals and GP surgeries. Why not get in touch with us to see how we could assist with your care staffing needs?
                </p>
            </article>
            <figure>
                <img src="<?php echo get_template_directory_uri() . "/assets/images/nurse-care-smiling-patient.jpg" ?>" alt="access medics">
            </figure>
        </section>
    </div>
</section>

<?php get_template_part('/components/get-in-touch'); ?>

<?php get_footer(); ?>