<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package activello
 */
?><!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Barebones</title>
	<meta name="description" content="Barebones HTML project">
	<meta name="viewport" content="width=1024, minimal-ui">

	<!-- Favicon block -->
	<!-- Images generated from a single 260x260 image by http://realfavicongenerator.net/ -->
	<link rel="shortcut icon" href="favicon.ico">

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon-180x180.png">

	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/favicon-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/favicon-32x32.png" sizes="32x32">

	<meta name="msapplication-TileColor" content="#d10d3f">
	<meta name="msapplication-TileImage" content="mstile-144x144.png">
	<meta name="msapplication-config" content="browserconfig.xml">
	<!-- / Favicon block -->

	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/styles/main.css">
	<style>
		.preloader-cont{
			position: fixed;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			background: #fff;
			z-index: 100500;
		}
		.preloader-itself{
			background: url('<?php echo get_template_directory_uri() ?>/preloader.gif') no-repeat 50% 50%;
			background-size: cover;
			width: 50px;
			height: 50px;
			position: absolute;
			top:50%;
			left: 50%;
			transform: translate3d(-50%,-50%, 0);
		}
	</style>
</head>
<body>
<div class="preloader-cont">
	<div class="preloader-itself"></div>
</div>

