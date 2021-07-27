<?php

/*
Template Name: Contact
 */

get_header();
?>

<main data-barba="container" data-barba-namespace="contact">
    <div class="page-title"><?= the_title() ?></div>

    <section class="contact">
        <div class="contact__background" data-scroll>
            <?php
            $imageContact = get_field('contact_image');
            if (!empty($imageContact)) : ?>
                <img data-scroll data-scroll-speed="-2" loading="lazy"
                     src="<?php echo esc_url($imageContact['url']); ?>" alt=""/>
            <?php endif; ?>
        </div>

        <div class="contact__content">
            <h1 class="contact__title"><?php the_field('contact_main_title'); ?></h1>

            <h2 class="contact__content-title"><?php the_field('contact_project_title'); ?></h2>

            <p class="contact__content-text"><?php the_field('contact_project_text'); ?></p>
        </div>

    </section>

    <section class="details">
        <h2 class="details__title"><?php the_field('contact_details_title'); ?></h2>

        <?php if (have_rows('contact_details_1')) : ?>
            <?php while (have_rows('contact_details_1')) : the_row();

                // Get sub field values.

                $officeName = get_sub_field('contact_details_1_name');
                $officeMail = get_sub_field('contact_details_1_mail');
                $officeAddress = get_sub_field('contact_details_1_address');
                $officePhone = get_sub_field('contact_details_1_phone');
                $officeMapLink = get_sub_field('contact_details_1_link');
                $officeMapLinkText = get_sub_field('contact_details_1_link_text');

                ?>

                <div class="details__office">
                    <div class="office">
                        <p class="office__name"><?php echo $officeName ?></p>
                        <ul class="office__details">
                            <li class="office__details-mail">Mail: <?php echo $officeMail ?></li>
                            <li class="office__details-address">Address: <?php echo $officeAddress ?></li>
                            <li class="office__details-phone">Phone: <?php echo $officePhone ?></li>
                        </ul>
                    </div>
                    <a class="office__map-link" target="_blank"
                       href="<?php echo esc_url($officeMapLink['url']); ?>"><?php echo $officeMapLinkText; ?></a>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

        <?php if (have_rows('contact_details_2')) : ?>
            <?php while (have_rows('contact_details_2')) : the_row();

                // Get sub field values.

                $officeName = get_sub_field('contact_details_2_name');
                $officeMail = get_sub_field('contact_details_2_mail');
                $officeAddress = get_sub_field('contact_details_2_address');
                $officePhone = get_sub_field('contact_details_2_phone');
                $officeMapLink = get_sub_field('contact_details_2_link');
                $officeMapLinkText = get_sub_field('contact_details_2_link_text');

                ?>

                <div class="details__office">
                    <div class="office">
                        <p class="office__name"><?php echo $officeName ?></p>
                        <ul class="office__details">
                            <li class="office__details-mail">Mail: <?php echo $officeMail ?></li>
                            <li class="office__details-address">Address: <?php echo $officeAddress ?></li>
                            <li class="office__details-phone">Phone: <?php echo $officePhone ?></li>
                        </ul>
                    </div>
                    <a class="office__map-link" target="_blank"
                       href="<?php echo esc_url($officeMapLink['url']); ?>"><?php echo $officeMapLinkText; ?></a>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </section>

    <section class="form-section">
        <h2 class="form-section__title"><?php the_field('contact_form_title'); ?></h2>
        <form action="" class="form">
            <input class="form__input form__input--name" type="text" placeholder="Name">
            <input class="form__input form__input--email" type="email" placeholder="Email">
            <textarea class="form__input form__input--text" placeholder="Message"></textarea>
            <span class="btn-send form__input--send">
                <input type="submit">
            </span>
        </form>

    </section>
</main>

<?php
get_footer();
?>
