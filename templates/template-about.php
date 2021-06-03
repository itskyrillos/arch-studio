<?php

/*
 * Template Name: About
 */

get_header();
?>

<main data-barba="container" data-barba-namespace="portfolio">
    <div class="page-title"><?= the_title() ?></div>

    <section class="about">
        <?php
        $imageAbout = get_field('about_image');
        if (!empty($imageAbout)) : ?>
            <img class="about__background" src="<?php echo esc_url($imageAbout['url']); ?>" alt=""/>
        <?php endif; ?>

        <div class="about__content">
            <h1 class="about__title"><?php the_field('about_main_title'); ?></h1>

            <h2 class="about__content-title"><?php the_field('about_team_title'); ?></h2>

            <p class="about__content-text"><?php the_field('about_team_text'); ?></p>
        </div>

    </section>

    <section class="heritage">
        <div class="heritage__content">
            <h2 class="heritage__content-title"><?php the_field('about_heritage_title'); ?></h2>
            <div class="heritage__content-text"><?php the_field('about_heritage_text'); ?></div>
        </div>

        <?php
        $imageHeritage = get_field('about_heritage_image');
        if (!empty($imageHeritage)) : ?>
            <img class="heritage__image" src="<?php echo esc_url($imageHeritage['url']); ?>" alt=""/>
        <?php endif; ?>
    </section>

    <section class="leaders">
        <h2 class="leaders__title"><?php the_field('about_leaders_title'); ?></h2>
        <div class="leaders__cards">
            <?php if (have_rows('about_leader_1')): ?>
                <?php while (have_rows('about_leader_1')): the_row();
                    $leaderAvatar = get_sub_field('about_leader_1_image');
                    $leaderName = get_sub_field('about_leader_1_name');
                    $leaderRole = get_sub_field('about_leader_1_role');
                    $linkLinkedin = get_sub_field('about_leader_1_linkedin');
                    $linkTwitter = get_sub_field('about_leader_1_twitter');

                    ?>
                    <div class="card">
                        <div class="card__image">
                            <img class="card__avatar" src="<?php echo esc_url($leaderAvatar['url']); ?>"
                                 alt="<?php echo esc_attr($leaderAvatar['alt']); ?>"/>

                            <div class="card__links">
                                <a class="card__link card__link--linkedin" target="_blank" href="<?php echo $linkLinkedin; ?>">LinkedIn</a>

                                <a class="card__link card__link--twitter" target="_blank"
                                   href="<?php echo $linkTwitter; ?>">Twitter</a>
                            </div>
                        </div>

                        <h3 class="card__name"><?php echo $leaderName; ?></h3>

                        <p class="card__role"><?php echo $leaderRole; ?></p>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('about_leader_2')): ?>
                <?php while (have_rows('about_leader_2')): the_row();
                    $leaderAvatar = get_sub_field('about_leader_2_image');
                    $leaderName = get_sub_field('about_leader_2_name');
                    $leaderRole = get_sub_field('about_leader_2_role');
                    $linkLinkedin = get_sub_field('about_leader_2_linkedin');
                    $linkTwitter = get_sub_field('about_leader_2_twitter');

                    ?>
                    <div class="card">
                        <div class="card__image">
                            <img class="card__avatar" src="<?php echo esc_url($leaderAvatar['url']); ?>"
                                 alt="<?php echo esc_attr($leaderAvatar['alt']); ?>"/>

                            <div class="card__links">
                                <a class="card__link card__link--linkedin" target="_blank" href="<?php echo $linkLinkedin; ?>">LinkedIn</a>

                                <a class="card__link card__link--twitter" target="_blank"
                                   href="<?php echo $linkTwitter; ?>">Twitter</a>
                            </div>
                        </div>

                        <h3 class="card__name"><?php echo $leaderName; ?></h3>

                        <p class="card__role"><?php echo $leaderRole; ?></p>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('about_leader_3')): ?>
                <?php while (have_rows('about_leader_3')): the_row();
                    $leaderAvatar = get_sub_field('about_leader_3_image');
                    $leaderName = get_sub_field('about_leader_3_name');
                    $leaderRole = get_sub_field('about_leader_3_role');
                    $linkLinkedin = get_sub_field('about_leader_3_linkedin');
                    $linkTwitter = get_sub_field('about_leader_3_twitter');

                    ?>
                    <div class="card">
                        <div class="card__image">
                            <img class="card__avatar" src="<?php echo esc_url($leaderAvatar['url']); ?>"
                                 alt="<?php echo esc_attr($leaderAvatar['alt']); ?>"/>

                            <div class="card__links">
                                <a class="card__link card__link--linkedin" target="_blank" href="<?php echo $linkLinkedin; ?>">LinkedIn</a>

                                <a class="card__link card__link--twitter" target="_blank"
                                   href="<?php echo $linkTwitter; ?>">Twitter</a>
                            </div>
                        </div>

                        <h3 class="card__name"><?php echo $leaderName; ?></h3>

                        <p class="card__role"><?php echo $leaderRole; ?></p>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('about_leader_4')): ?>
                <?php while (have_rows('about_leader_4')): the_row();
                    $leaderAvatar = get_sub_field('about_leader_4_image');
                    $leaderName = get_sub_field('about_leader_4_name');
                    $leaderRole = get_sub_field('about_leader_4_role');
                    $linkLinkedin = get_sub_field('about_leader_4_linkedin');
                    $linkTwitter = get_sub_field('about_leader_4_twitter');

                    ?>
                    <div class="card">
                        <div class="card__image">
                            <img class="card__avatar" src="<?php echo esc_url($leaderAvatar['url']); ?>"
                                 alt="<?php echo esc_attr($leaderAvatar['alt']); ?>"/>

                            <div class="card__links">
                                <a class="card__link card__link--linkedin" target="_blank" href="<?php echo $linkLinkedin; ?>">LinkedIn</a>

                                <a class="card__link card__link--twitter" target="_blank"
                                   href="<?php echo $linkTwitter; ?>">Twitter</a>
                            </div>
                        </div>

                        <h3 class="card__name"><?php echo $leaderName; ?></h3>

                        <p class="card__role"><?php echo $leaderRole; ?></p>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
?>
