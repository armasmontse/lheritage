<?php
    global $post;
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );

    $imageFlex = get_field('image');

?>

<section class="menu__section-one">
    <div class="menu__row">
        <div class="menu__container-fluid">
            <div class="menu__col-1-1">

                <div class="menu__splash" style="background-image: url(<?php echo $src[0]; ?> ) ">
                    <div class="menu__title">
                        <h2><?php the_field('title-section-one'); ?>
                            <span><?php the_field('title-section-one-cursive'); ?></span>
                        </h2>
                    </div>
                    <div class="menu__arrow">
                        <a href="#menu-cart">
                            <img src="<?php echo THEMEURL ?>images/arrow-bottom.svg" alt="">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
