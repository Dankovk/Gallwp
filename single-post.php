
<?php get_header() ?>
<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

do_action( 'woocommerce_before_cart' ); ?>
<div class="layout-header header-static">
    <div class="nav">
        <div class="the-studio">
            <a href="#"> <span class="bold">THEO</span><span>STUDIO</span></a>
        </div>
        <div class="artists">
            <a href="#">
                <span>ARTISTS</span>
            </a>
        </div>
        <div class="contact">
            <a href="#">
                <span style="color: transparent">CONTACT</span>
            </a>
        </div>
        <div class="basket">
            <a href="#">
                <span class="ic-basket"></span>
            </a>
        </div>
    </div>
</div>

<div class="layout-content single-art-content">
    <div class="layout-container art-container post-wrap">
        <?php  while (have_posts()) : the_post(); ?>
        <div class="post-header">
            <h1><?php echo the_title() ?></h1>
            <div class="author-date">
                <span class="author"><?php echo the_field('author') ?></span>
                <span class="date"><?php echo get_the_date(); ?></span>
            </div>
        </div>
        <div class="post-content">
                <?php the_content(); ?>
        </div>
        <div class="posts-pagination">
            <div class="previous-post">
                <?
                $prev_post = get_adjacent_post(false, '', true);
                if(!empty($prev_post)) {
                    echo '<a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '"><span>Previous story</span><span class="post-exerp">' . $prev_post->post_title . '</span></a>'; }
                ?>
            </div>
            <div class="next-post">
                <?
                $next_post = get_adjacent_post(false, '', false);
                if(!empty($next_post)) {
                    echo '<a href="' . get_permalink($next_post->ID) . '" title="' . $prev_post->post_title . '"><span>Next story</span><span class="post-exerp">' . $next_post->post_title . '</span></a>'; }
                ?>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>



<?php get_footer(); ?>

