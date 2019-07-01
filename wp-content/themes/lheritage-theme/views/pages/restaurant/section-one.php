<?php
    global $post;
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>

<section class="restaurant__section-one section-scroll">
    <div class="restaurant__row">
        <div class="restaurant__container-fluid">
            <div class="restaurant__col-1-1">

                <div class="restaurant__splash" style="background-image: url(<?php echo $src[0]; ?> ) ">
                    <div class="restaurant__title">
                        <h2><?php the_field('title-section-one'); ?>
                            <span><?php the_field('title-section-one-cursive'); ?></span>
                        </h2>
                    </div>
                    <div class="restaurant__arrow">
                        <a href="#history">
                            <img src="<?php echo THEMEURL ?>images/arrow-bottom.svg" alt="">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
