<?php
    //$image = get_field('image-section-four');
    global $post;

    $menu_transition1 = '20';
    $menu_transition2 = '-44';

    $menu_duration1 = '3';
    $menu_duration2 = '100%';

    $menu_time1 = '1.5';
    $menu_time2 = '1.5';


?>
<section class="menu__section-two" id="menu-cart">
    <div class="menu__row">
        <div class="menu__container-fluid">
            <div class="menu__col-1-1">


                <div class="menu__two-sections menu_parallax_JS">

                    <?php if( have_rows('repeater') ):
                        $columna = 0; while ( have_rows('repeater') ) : the_row(); 
                    
                        $orientation = 0;
                        if($columna % 2 == 1) $orientation = 1;
                    ?>

                    <div class="<?php echo $orientation ? 'alignRight' : 'alignLeft'; ?>">
                        <?php if( have_rows('group_cart') ):?>

                        <?php $i = 1; while ( have_rows('group_cart') ) : the_row();  
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');?>


                        
                        <div class="menu__background" style="background-image:url(<?php echo $image['url'] ?>)"></div> 
                        <?php if( ($title) || ($text)  ):?>
                            <div class="menu__cart y-scroll_JS" 
                                data-transition="<?php echo $orientation ? $menu_transition2 : $menu_transition1; ?>"
                                data-duration="<?php echo $orientation ? $menu_duration2 : $menu_duration1; ?>"
                                data-time="<?php echo $orientation ? $menu_time2 : $menu_time1; ?>">

                                <div class="menu__cart-title"><?php echo $title ?></div>
                                <div class="menu__cart-text">
                                    <?php echo $text ?>
                                </div>
                            </div>
                        <?php endif; ?>   
                        


                        <?php $i++; endwhile; 
                        endif; ?>
                    </div>

                <?php if($columna % 2 == 1): ?>
                </div>
                <div class="menu__two-sections">
                <?php endif; ?>
                

                <?php $columna++; endwhile; ?>   
                <?php endif; ?>

                </div>


                <div class="menu__cava">
                    <?php
                    $imageBack = get_field('image_background');
                    $title = get_field('title');
                    $link = get_field('link');
                    ?>

                    
                    <div class="menu__background" style="background-image:url(<?php echo $imageBack['url'] ?>)"></div> 
                    <div class="menu__cava-text">
                        <a href="<?php echo $link ?>" target="_blank"><?php echo $title ?></a>
                    </div>

                </div>


            </div>
        </div>
    </div>
</section>
