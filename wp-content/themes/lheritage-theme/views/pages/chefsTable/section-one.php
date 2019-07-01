<?php
    global $post;
    global $general_options;
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>

<section class="chefsTable__section-one">
    <div class="chefsTable__row">
        <div class="chefsTable__container-fluid">
            <div class="chefsTable__col-1-1">

                <div class="chefsTable__splash" style="background-image: url(<?php echo $src[0]; ?> ) ">

                    <div class="chefsTable__info">
                        <div class="chefsTable__title">
                            <h2><?php the_title(); ?></h2>
                            
                        </div>

                        <div class="chefsTable__text">
                            <?php the_content(); ?>
                            <?php if ($general_options['telephone']): ?>
                                <p class="chefsTable__reservations"><?=__('RESERVACIONES',TRANSDOMAIN) ?></p>
                                <a class="footer__text" href="tel:<?php echo $general_options['telephone']; ?>">t.<?php echo $general_options['telephone']; ?></a> <br>
                            <?php endif; ?>
                        </div>

                    </div>

                    <div class="chefsTable__text-bottom">
                        <?php the_field('text'); ?>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
