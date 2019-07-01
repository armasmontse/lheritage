<?php get_header(); ?>

	<div class="error">
		<div class="error__container">
			<h2 class="error__text"><?=__('<span>404</span> ¡Lo sentimos! No encontramos la página',TRANSDOMAIN) ?></h2>
			<p><a class="error__button" href="<?php echo BLOGURL ?>"><?=__('Regresar',TRANSDOMAIN) ?></a></p>
		</div>
	</div>

<?php get_footer(); ?>
