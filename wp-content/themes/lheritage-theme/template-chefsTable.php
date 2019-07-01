<?php

/* Template Name: ChefsTable */

get_header();

if (have_posts()) : while (have_posts()) : the_post();

?>
    <div class="chefsTable">
        <!---  S E C T I O N   O N E  -->
        <?php get_template_part('views/pages/chefsTable/section-one'); ?>

    </div>
<?php

endwhile; endif;

get_footer();
