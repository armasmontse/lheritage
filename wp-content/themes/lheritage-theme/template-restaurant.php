<?php

/* Template Name: Restaurant */

get_header();

if (have_posts()) : while (have_posts()) : the_post();

?>
    <div class="restaurant scrollify">

        <!---  S E C T I O N   O N E  -->
        <?php get_template_part('views/pages/restaurant/section-one'); ?>

        <!---  S E C T I O N   F I V E -->
        <?php get_template_part('views/pages/restaurant/section-five'); ?>

        <!---  S E C T I O N   T W O -->
        <?php get_template_part('views/pages/restaurant/section-two'); ?>

        <!---  S E C T I O N   T H R E E -->
        <?php get_template_part('views/pages/restaurant/section-three'); ?>

        <!---  S E C T I O N   F O U R -->
        <?php get_template_part('views/pages/restaurant/section-four'); ?>

    </div>
<?php

endwhile; endif;

get_footer();
