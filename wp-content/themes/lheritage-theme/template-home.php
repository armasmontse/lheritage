<?php

/* Template Name: Home */

get_header();

if (have_posts()) : while (have_posts()) : the_post();

?>
    <div class="home scrollify">
        <!---  S E C T I O N   O N E  -->
        <?php get_template_part('views/pages/home/section-one'); ?>

        <!---  M O D A L -->
        <?php get_template_part('views/pages/home/modal'); ?>

        <!---  S E C T I O N   T W O -->
        <?php get_template_part('views/pages/home/section-two'); ?>

        <!---  S E C T I O N   T H R E E -->
        <?php get_template_part('views/pages/home/section-three'); ?>

        <!---  S E C T I O N   F O U R -->
        <?php get_template_part('views/pages/home/section-four'); ?>

        <!---  S E C T I O N   F I V E -->
        <?php get_template_part('views/pages/home/section-five'); ?>

    </div>
<?php

endwhile; endif;

get_footer();
