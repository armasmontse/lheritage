<?php

/* Template Name: Events */

get_header();

if (have_posts()) : while (have_posts()) : the_post();

?>
    <div class="events scrollify">
        <!---  S E C T I O N   O N E  -->
        <?php get_template_part('views/pages/events/section-one'); ?>

        <!---  S E C T I O N   T W O -->
        <?php get_template_part('views/pages/events/section-two'); ?>

    </div>
<?php

endwhile; endif;

get_footer();
