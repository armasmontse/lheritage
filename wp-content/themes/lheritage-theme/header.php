<!DOCTYPE html>
<html lang="<?php echo substr(get_bloginfo ( 'language' ), 0, 2);?>">
<head>
	<meta charset="UTF-8">
	<title><?php
		global $page, $paged;

		wp_title( '|', true, 'right' );
		bloginfo( 'name' );

		$site_description = get_bloginfo( 'description', 'display' );

		if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
	?></title>

	<meta name="author" content="<?php echo THEMEURL;?>humans.txt">

	<?php
	//generar el favicon usando http://www.favicomatic.com/ y agregar los archivos a images/favicon/
	include_once('inc/favicon.php');?>

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="563925394055805" />
	<meta property="og:image" content="<?php echo BLOGURL;?>/wp-content/uploads/2018/12/20181101_192130_resized-min.jpg" />
	<meta property="og:description" content="<?php echo $site_description;?>"/>
	<meta property="og:title" content="<?php bloginfo( 'name' );?>"/>

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="<?php bloginfo( 'name' );?>">
	<meta itemprop="description" content="Some of the french classic gastronomy created with the best seasonal products and with the innovative proposal of our chef de cuisine, Cyril Cheminot">
	<meta itemprop="image" content="<?php echo BLOGURL;?>/wp-content/uploads/2018/12/20181101_192130_resized-min.jpg">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<!-- Google Tag Manager -->
	<script>
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KT93WDT');
	</script>

	<!-- Estilos de Slick slide /-->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

	<!-- Animate.css /-->
	<!-- Animate.css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<link href="<?php bloginfo('template_url'); ?>/style.css?ver=1.1" rel="stylesheet" type="text/css" />

	<?php wp_head(); ?>
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KT93WDT" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>


	<?php

	global $general_options;

	$general_options = array(

		'email'     => get_field('email', 'general-options_'.ICL_LANGUAGE_CODE),
		'telephone' => get_field('telephone', 'general-options_'.ICL_LANGUAGE_CODE),
		'addres'    => get_field('addres', 'general-options_'.ICL_LANGUAGE_CODE),
		'hours'     => get_field('hours', 'general-options_'.ICL_LANGUAGE_CODE),
		'facebook'  => get_field('facebook', 'general-options_'.ICL_LANGUAGE_CODE),
		'instagram' => get_field('instagram', 'general-options_'.ICL_LANGUAGE_CODE),
		'youtube'   => get_field('youtube', 'general-options_'.ICL_LANGUAGE_CODE),
		'spotify'   => get_field('spotify', 'general-options_'.ICL_LANGUAGE_CODE),
		
	);

	?>

	<?php

	/**
	 *CLTVO: poner esto en true sólo en la versiones locales.
	 */

	if( !defined('CLTVO_ISLOCAL') || ( CLTVO_ISLOCAL != true) ){ include_once('inc/analytics.php'); }

	?>


	<!--[if gt IE 8]><div style="z-index: 1000; padding: 5px 0; text-align: center; position: absolute; top: 0; left: 0; width: 100%; background-color: #312822;"><p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: white;">Consider <a style="color: #EA7640;
	text-decoration: underline;" href="http://www.google.com/intl/es/chrome/browser/" target="_blank">updating your browser</a> in order to render this site correctly.</p></div><!-->
<!--<![endif]-->

	<!-- Aquí podría abrir el main-wrap -->
	<div class="main-wrap" >
		<?php get_template_part('views/general/header'); ?>
