<?php
    $imageBig = get_field('image-big-section-three');
    $imageSmall = get_field('image-small-section-three');
?>

<section class="restaurant__section-three section-scroll">
    <div class="restaurant__row">
        <div class="restaurant__container">
            <div class="restaurant__col-1-2">

                <div class="restaurant__content restaurant__left">
                    <div class="restaurant__contentBig-image">
                        <img class="restaurant__image" src="<?php echo $imageBig['url']; ?>" alt="<?php echo $imageBig['alt']; ?>" />
                    </div>

                    <div class="restaurant__contentSmall-image">
                        <img class="restaurant__image" src="<?php echo $imageSmall['url']; ?>" alt="<?php echo $imageSmall['alt']; ?>" />
                    </div>
                </div>

            </div>
            <div class="restaurant__col-1-2">

                <div class="restaurant__content restaurant__right">
                    <h2 class="restaurant__sections-titles"><?php the_field('title-section-three'); ?></h2>
                    <h5 class="restaurant__sections-subtitles"><?php the_field('subtitle-section-three'); ?></h5>
                    <div class="restaurant__sections-text">
                        <?php the_field('text-section-three'); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
