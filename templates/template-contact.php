<?php

/*
Template Name: Contact
 */

get_header();
?>

<main data-barba="container" data-barba-namespace="portfolio">
  <div class="page-title"><?= the_title() ?></div>

    <section class="contact">
        <?php
        $imageContact = get_field('contact_image');
        if (!empty($imageContact)) : ?>
            <img class="contact__background" src="<?php echo esc_url($imageContact['url']); ?>" alt=""/>
        <?php endif; ?>

        <div class="contact__content">
            <h1 class="contact__title"><?php the_field('contact_main_title'); ?></h1>

            <h2 class="contact__content-title"><?php the_field('contact_project_title'); ?></h2>

            <p class="contact__content-text"><?php the_field('contact_project_text'); ?></p>
        </div>

    </section>
</main>

<?php
get_footer();
?>
