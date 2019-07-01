<?php

$languages = icl_get_languages('skip_missing=0');

global $general_options;

?>

<header class="header" id="header__JS">
<div class="header__container">

        <!-- <button class="header__btn header__btn_JS"></button>-->
        <div class="header__container-center">
            <div class="header__brand">
                <a class="header__logo" href="<?php echo BLOGURL ?>">
                        <img src="<?php echo THEMEURL ?>images/logo.svg" alt="">
                </a>
                <a class="header__logo-letters" href="<?php echo BLOGURL ?>">
                        <img src="<?php echo THEMEURL ?>images/logo-letters.svg" alt="">
                </a>
            </div>

            <div class="header__right">

                <ul class="header__lenguaje">
                    <?php foreach($languages as $language): ?>
                    <li class="<?php if($language['active']): echo 'current-menu-item'; endif; ?>">
                        <a href="<?php echo $language['url'] ?>" lang="<?php echo $language['code'] ?>" hreflang="<?php echo $language['code'] ?>">
                            <?php echo substr($language['native_name'], 0, 2); ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <button class="header__btn header__btn_JS"></button>

            </div>
        </div>
    </div>

    <div class="header__menu header__menu__JS">

        <div class="header__menu-container">
            <div class="header__background">
                <img class="header__background-image" src="<?php echo THEMEURL ?>images/lheritage.svg" alt="">
            </div>

            <div class="header__menu-content">
                <div class="header__nav">
                    <?php
                        wp_nav_menu(array(
                                'menu'            => "Main menu",
                                'theme_location'  => 'header_menu',
                                'container'       => 'nav',
                                'menu_class'      => 'header__navbar-list',
                        ));
                    ?>

                    <div class="header__copyright">
                        <p>Copyright © 2017 l’héritage</p>
                    </div>

                </div>
                <div class="header__contact">

                    <div class="header__columns footer__addres">
                        <?php echo $general_options['addres']; ?>
                    </div>

                    <div class="header__columns footer__contact">
                        <h5 class="footer__title">reservaciones</h5>
                        <a class="footer__text" href="tel:<?php echo $general_options['telephone']; ?>">t.<?php echo $general_options['telephone']; ?></a> <br>
                        <a class="footer__text" href="mailto:<?php echo $general_options['email']; ?>"><?php echo $general_options['email']; ?></a>
                    </div>

                    <div class="header__columns footer__hours">
                        <h5 class="footer__title">horarios</h5>
                        <?php echo $general_options['hours']; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

</header>
