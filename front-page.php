<?php
get_header();
?>

<div class="page-title"><?= the_title() ?></div>

<?php
// the query
$args = array(
    'order' => 'ASC',
    'tag' => 'Slide'
);

$query = new WP_Query($args); ?>

<?php if ($query->have_posts()) : ?>
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

<?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php
get_footer();
?>
