<?php
    $imageLeft = get_field('image-section-three');
?>

<section class="home__section-three section-scroll">
    <div class="home__row">
        <div class="home__container">
            <div class="home__col-1-1">

            <?php if( !empty($imageLeft) ): ?>
                <div class="home__content-left wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                    <img class="home__imageLeft" src="<?php echo $imageLeft['url']; ?>" alt="<?php echo $imageLeft['alt']; ?>" />
                </div>
            <?php endif; ?>

            <h2 class="home__content-title wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                <?php the_field('title-section-three'); ?>
                <span class="Bellissima"><?php the_field('title-section-three-cursive'); ?></span>
            </h2>

            <div class="home__content-text wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                <?php the_field('text-section-three'); ?>
            </div>

            <a class="home__link wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s" href="<?php the_field('link-section-three'); ?>" class="">
                <?= __('ver carta de alimentos',TRANSDOMAIN) ?>
            </a>

            </div>
        </div>
    </div>
</section>
