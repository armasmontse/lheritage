<section class="events__section-two section-scroll" id="eventos">
    <div class="events__row">
        <div class="events__container">
            <div class="events__col-1-1">

                <div class="events__title-proximate">
                    <h2><?php the_field('title-proximate-events') ?></h2>
                </div>

                <?php if( have_rows('proximate-events') ): ?>

                    <div class="events__coming">
                        <?php while( have_rows('proximate-events') ): the_row();
                            $image = get_sub_field('image');
                            $content = get_sub_field('text');
                            $title = get_sub_field('title');
                            $date = get_sub_field('date');
                            ?>
                            <div class="events__content">

                                <div class="events__content-info">

                                    
                                    <h5 class="events__coming-title events__coming-date">
                                        <?php echo $date; ?>
                                    </h5>


                                    <h5 class="events__coming-title">
                                        <?php echo $title; ?>
                                    </h5>


                                    <div class="events__text">
                                        <?php echo $content; ?>
                                    </div>
                                </div>

                                <div class="events__content-image">
                                    <img class="events__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                </div>

                            </div>

                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <div class="events__coming">
                        <div class="events__content-info">
                            <h5 class="events__coming-title"><?= __('No hay eventos',TRANSDOMAIN) ?></h5>
                        </div>
                    </div>

                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
