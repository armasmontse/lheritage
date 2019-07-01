<?php

/* Template Name: Menu */

get_header();

if (have_posts()) : while (have_posts()) : the_post();

?>
    <div class="menu">
        <!---  S E C T I O N   O N E  -->
        <?php get_template_part('views/pages/menu/section-one'); ?>

        <!---  S E C T I O N   T W O -->
        <?php get_template_part('views/pages/menu/section-two'); ?>

    </div>
<?php

endwhile; endif;

get_footer();
