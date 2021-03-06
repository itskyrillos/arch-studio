<?php

/*
Template Name: Portfolio
 */


get_header();
?>
    <main data-barba="container" data-barba-namespace="portfolio">
        <div class="page-title"><?= the_title() ?></div>

        <section class="portfolio">

            <?php
            // the query
            $args = array(
                'posts_per_page' => -1,
                'post_type' => 'post',
                'order' => 'DESC',
                'category_name' => 'Portfolio'
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) : ?>

                <?php

                while ($query->have_posts()) : $query->the_post(); ?>
                    <a class="portfolio__post-link" href="<?php the_permalink(); ?>">
                        <article class="portfolio__post">
                            <div class="post__image">
                                <img data-scroll data-scroll-speed="-1" loading="lazy"
                                     src="<?= the_post_thumbnail_url('full'); ?>" alt="">
                            </div>

                            <div class="post__content">
                                <h3 class="post__content-title"><?= get_the_title(); ?></h3>

                                <p class="post__content-date"><?php the_field('post_date'); ?></p>
                            </div>
                        </article>
                    </a>
                <?php endwhile;

                wp_reset_postdata();

            endif; ?>
        </section>
    </main>
<?php
get_footer();
?>