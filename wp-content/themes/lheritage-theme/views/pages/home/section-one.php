<?php
    global $post;
    global $general_options;
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>

<section class="home__section-one section-scroll">
    <div class="home__row">
        <div class="home__container-fluid">
            <div class="home__col-1-1">

                <div class="home__splash" style="background-image: url(<?php echo $src[0]; ?> ) ">
                    <div class="home__title  wow fadeIn" data-wow-duration="3s" data-wow-delay="0.2s">
                        <h2><?php the_field('title-section-one'); ?>
                            <span><?php the_field('title-section-one-cursive'); ?></span>
                        </h2>
                    </div>
                </div>

                <div class="home__footer wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="home__footer-columns">
                        <div class="home__footer-address">
                            <?php echo $general_options['addres']; ?>
                        </div>
                    </div>

                    <div class="home__footer-columns buttons">
                        <div class="home__footer-reservations" id="reservaciones_JS"><?=__('RESERVACIONES',TRANSDOMAIN) ?></div>
                        <a href="<?php the_field('link-section-one');?>" target="_blank" class="home__footer-reservations"><?=__('FACTURACIÓN',TRANSDOMAIN) ?></a>
                    </div>

                    <div class="home__footer-columns">
                        <div class="home__footer-schedules">
                            <span>horarios</span>
                            <br>
                            <?php echo $general_options['hours']; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
