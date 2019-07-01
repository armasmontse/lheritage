<?php
    $imageBig = get_field('image-big-section-two');
    $imageSmall = get_field('image-small-section-two');
?>


<section class="home__section-two section-scroll">
    <div class="home__row">
        <div class="home__container">
            <div class="home__col-1-1">

                <div class="home__content-Big wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
                    <img class="home__imageBig" src="<?php echo $imageBig['url']; ?>" alt="<?php echo $imageBig['alt']; ?>" />
                </div>

                <div class="home__content-Small wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.4s">
                    <img class="home__imageSmall" src="<?php echo $imageSmall['url']; ?>" alt="<?php echo $imageSmall['alt']; ?>" />
                </div>

                <div class="home__content-lheritage wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                    <img class="home__image-lheritage" src="<?php echo THEMEURL ?>images/lheritage-cursive.png" alt="L'HERITAGE" />
                </div>

                <h2 class="home__content-title wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s"> <?= the_field('title-section-two'); ?>
                    <span><?= the_field('title-section-two-cursive'); ?> </span>
                </h2>
    
                <a class="home__link wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s" href="<?php the_field('link-section-two'); ?>" class=""><?= __('más sobre nosotros',TRANSDOMAIN) ?></a>

            </div>
        </div>
    </div>
</section>
