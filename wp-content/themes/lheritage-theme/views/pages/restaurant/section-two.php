<?php
    $image = get_field('image-section-two');
    $imageBig = get_field('image-big-section-two');
?>
<section class="restaurant__section-two section-scroll" id="space">
    <div class="restaurant__row">
        <div class="restaurant__container">
            <div class="restaurant__col-1-2">

                <div class="restaurant__content restaurant__left">
                    <h2 class="restaurant__sections-titles"><?php the_field('title-section-two'); ?></h2>
                    <h5 class="restaurant__sections-subtitles"><?php the_field('subtitle-section-two'); ?></h5>
                    <div class="restaurant__sections-text">
                        <?php the_field('text-section-two'); ?>
                    </div>
                </div>

            </div>
            <div class="restaurant__col-1-2">

                <div class="restaurant__content restaurant__right">
                    <h3 class="restaurant__sections-titlesmall">
                        <?php the_field('phrase-section-two'); ?><span><?php the_field('phrase-section-two-cursive'); ?></span>
                    </h3>
                    <div class="restaurant__contentBig-image">
                        <img class="restaurant__image" src="<?php echo $imageBig['url']; ?>" alt="<?php echo $imageBig['alt']; ?>" />
                    </div>

                    <div class="restaurant__content-image">
                        <img class="restaurant__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
