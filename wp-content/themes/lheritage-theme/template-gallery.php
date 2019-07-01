<?php

/* Template Name: Gallery */

get_header();

if (have_posts()) : while (have_posts()) : the_post();

?>

    <div class="scrollify">
        <section class="gallery section-scroll">

            <div class="gallery__title">
                <h2><?php the_title(); ?></h2>
            </div>

            <!-- Slider -->
            <?php
            $images = get_field('gallery');

            if( $images ): ?>
                <div class="gallery__slick-slide">
                    <ul class="gallery__slides-list">
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <div class="gallery__slides-item">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <p class="gallery__slides-title"><?php echo $image['title']; ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

        </section>
    </div>
    
<?php

endwhile; endif;

get_footer();
