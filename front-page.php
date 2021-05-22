<?php
get_header();
?>
<main data-barba="container" data-barba-namespace="home">

    <div class="page-title"><?= the_title() ?></div>

    <header>

        <?php
        // the query
        $args = array(
            'post_type' => 'post',
            'order' => 'ASC',
            'tag' => 'Slide',
            'post_per_page' => '4'
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) : ?>
            <div class="slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <?php
                        $linkPortfolio = get_field('home_header_link');
                        $textLinkPortfolio = get_field('home_header_link_text');

                        while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="swiper-slide">
                                <img class="slider__image" src="<?= the_post_thumbnail_url('full'); ?>" alt="">

                                <div class="slider__content">
                                    <div class="slider__title"><?= get_the_title(); ?></div>

                                    <p><?= get_the_content(); ?></p>
                                </div>

                                <a class="slider__link link--arrow"
                                   href="<?php echo esc_url($linkPortfolio); ?>"><?php echo $textLinkPortfolio ?></a>
                            </div>
                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        <?php endif; ?>

    </header>

    <section class="welcome">
        <h1 class="welcome__title"><?php the_field("home_main_title"); ?></h1>

        <div class="welcome__content-block">
            <div class="welcome__content">
                <h2 class="welcome__content-title"><?php the_field("home_welcome_title"); ?></h2>

                <div class="welcome__content-text"><?php the_field('home_welcome_text'); ?></div>
            </div>

            <?php
            $image = get_field('home_welcome_image');

            if (!empty($image)) : ?>
                <img class="welcome__image" src="<?php echo esc_url($image['url']); ?>" alt=""/>
            <?php endif; ?>
        </div>
    </section>

    <section class="team">
        <?php
        $image = get_field('home_about_background');

        if (!empty($image)) : ?>
            <img class="team__background" src="<?php echo esc_url($image['url']); ?>" alt=""/>
        <?php endif; ?>

        <div class="team__content">
            <?php the_field("home_about_title"); ?>

            <a class="team__link link--arrow"
               href="<?php the_field('home_about_link'); ?>"><?php the_field('home_about_link_text'); ?></a>
        </div>
    </section>

    <section class="featured">
        <div class="featured__top">
            <h2 class="featured__title"><?php the_field('home_featured_title'); ?></h2>

            <a class="featured__link link--arrow"
               href="<?php the_field('home_featured_link'); ?>"><?php the_field('home_featured_link_text'); ?></a>
        </div>

        <?php
        // the query
        $args = array(
            'post_type' => 'post',
            'order' => 'DESC',
            'tag' => 'Featured',
            'post_per_page' => '3'
        );

        $query = new WP_Query($args); ?>

        <div class="featured__posts">
            <?php if ($query->have_posts()) : ?>

                <?php
                $linkPortfolio = get_field('home_featured_link');
                $postNumber = 1;

                while ($query->have_posts()) : $query->the_post(); ?>
                    <a class="featured__post-link" href="<?php echo esc_url($linkPortfolio); ?>">
                        <article class="featured__post">
                            <img class="post__image" src="<?= the_post_thumbnail_url('full'); ?>" alt="">

                            <div class="post__number"><?php echo $postNumber; ?></div>

                            <div class="post__content">
                                <h3 class="post__content-title"><?= get_the_title(); ?></h3>

                                <p class="post__content-text">View All Projects</p>
                            </div>
                        </article>
                    </a>
                    <?php
                    $postNumber++;
                endwhile;

                wp_reset_postdata();

            endif; ?>
        </div>
    </section>
</main>
<?php
get_footer();
?>
