<?php
    $image = get_field('image-section-four');
?>

<section class="restaurant__section-four section-scroll">
    <div class="restaurant__row">
        <div class="restaurant__container">
            <div class="restaurant__col-1-1">
                <div class="restaurant__team">
                    <h2 class="restaurant__sections-titles"><?php the_field('title-section-four'); ?></h2>
                    <div class="restaurant__content-lheritage">
                        <img class="restaurant__image-lheritage" src="<?php echo THEMEURL ?>images/lheritage-cursive.png" alt="L'HERITAGE" />
                    </div>
                </div>
            </div>
            <div class="restaurant__col-1-2">

                <div class="restaurant__content restaurant__left">
                    <div class="restaurant__sections-text">
                        <?php the_field('list-team'); ?>
                    </div>

                </div>

            </div>
            <div class="restaurant__col-1-2">

                <div class="restaurant__content restaurant__right">
                    <div class="restaurant__content-image">
                        <img class="restaurant__image" src="<?php echo $image ['url']; ?>" alt="<?php echo $image ['alt']; ?>" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
