<?php
    global $post;
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>

<section class="events__section-one section-scroll">
    <div class="events__row">
        <div class="events__container-fluid">
            <div class="events__col-1-1">

                <div class="events__splash" style="background-image: url(<?php echo $src[0]; ?> ) ">
                    <div class="events__title">
                        <h2><?php the_field('title-section-one'); ?>
                            <span><?php the_field('title-section-one-cursive'); ?></span>
                        </h2>
                    </div>
                    <div class="events__arrow">
                        <a href="#eventos">
                            <img src="<?php echo THEMEURL ?>images/arrow-bottom.svg" alt="">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
