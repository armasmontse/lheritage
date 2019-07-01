<?php
    global $general_options;    
?>
<!-- F O O T E R  -->
<footer class="footer">
    <div class="footer__container">
        <div class="footer__logo">
            <img src="<?php echo THEMEURL ?>images/lheritage.svg" alt="L'heritage logo">
        </div>

        <div class="footer__info">
            <div class="footer__columns footer__addres">
                <?php echo $general_options['addres']; ?>
            </div>

            <div class="footer__columns footer__contact">
                <h5 class="footer__title"><?=__('contacto',TRANSDOMAIN) ?></h5>
                <a class="footer__text" href="tel:<?php echo $general_options['telephone']; ?>">t.<?php echo $general_options['telephone']; ?></a> <br>
                
                <a class="footer__text" href="mailto:<?php echo $general_options['email']; ?>"> <?php echo $general_options['email']; ?></a>
            </div>

            <div class="footer__columns footer__newsletter">
                <h5 class="footer__title"><?= __('newsletter',TRANSDOMAIN) ?></h5>
                <h5 class="footer__text"><?= __('Recibe noticias de l’héritage',TRANSDOMAIN) ?></h5>
                <div id="mc_embed_signup">

                <!-- todo pendiente falta intergrar final  -->
                <form
                class="footer__form validate"
                action="https://elcultivo.us10.list-manage.com/subscribe/post?u=ff2d1f0894a6571389e11f159&amp;id=793e56be9e" method="post"
                id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll"></div>
                    <div class="mc-field-group">
                        <input type="email" value="" placeholder="Email" name="EMAIL" class="required email footer__form--input" id="mce-EMAIL" required>

                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            <input type="text" name="b_ff2d1f0894a6571389e11f159_793e56be9e" tabindex="-1" value="">
                        </div>
                    </div>


                    <div class="clear">
                        <button type="submit" class="footer__form--btn" name="subscribe" id="mc-embedded-subscribe">
                            <?=__("Enviar",TRANSDOMAIN) ?>
                        </button>
                    </div>
                </form>
                </div>
            </div>

            <div class="footer__columns footer__hours">
                <h5 class="footer__title"><?= __('horarios', TRANSDOMAIN) ?></h5>
                <?php echo $general_options['hours']; ?>
            </div>

        </div>

        <div class="footer__social">
            
            <?php if($general_options['instagram'] ): ?>
                <a href="<?php echo $general_options['instagram']; ?>" target="_blank">
                    <img class="footer__redes" src="<?php echo THEMEURL ?>images/instagram.svg" alt="Instagram icon">
                </a>
            <?php endif; ?>
    
            <?php if($general_options['facebook'] ): ?>
                <a href="<?php echo $general_options['facebook']; ?>" target="_blank">
                    <img class="footer__redes" src="<?php echo THEMEURL ?>images/facebook.svg" alt="facebook icon">
                </a>
            <?php endif; ?>

            <?php if($general_options['youtube'] ): ?>
                <a href="<?php echo $general_options['youtube']; ?>" target="_blank">
                    <img class="footer__redes youtube" src="<?php echo THEMEURL ?>images/youtube.svg" alt="youtube icon">
                </a>
            <?php endif; ?>

            <?php if($general_options['spotify'] ): ?>
                <a href="<?php echo $general_options['spotify']; ?>" target="_blank">
                    <img class="footer__redes spotify" src="<?php echo THEMEURL ?>images/spotify.svg" alt="spotify icon">
                </a>
            <?php endif; ?>

            

        </div>

    </div>
</footer>
