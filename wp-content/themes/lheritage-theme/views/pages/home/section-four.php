<?php
    $imageCenter = get_field('image-section-four');
?>

<section class="home__section-four section-scroll">
    <div class="home__row">
        <div class="home__container">
            <div class="home__col-1-1">

                <?php if( !empty($imageCenter) ): ?>
                    <div class="home__content-center wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                        <img class="home__imageCenter" src="<?php echo $imageCenter['url']; ?>" alt="<?php echo $imageCenter['alt']; ?>" />
                    </div>
                <?php endif; ?>

                <h2 class="home__content-title  wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                    <?php the_field('title-section-four'); ?>
                    <span><?php the_field('title-section-four-cursive'); ?></span>
                </h2>

                <div class="home__content-text  wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                    <?php the_field('text-section-four'); ?>
                </div>

                <a class="home__link  wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s" href="<?php the_field('link-section-four'); ?>" class=""><?= __('eventos en l’héritage',TRANSDOMAIN) ?></a>

            </div>
        </div>
    </div>
</section>
