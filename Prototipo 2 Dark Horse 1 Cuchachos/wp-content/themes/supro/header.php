<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Supro
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156912705-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156912705-1');
</script>

	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<?php do_action( 'supro_before_header' ); ?>

	<header id="masthead" class="site-header">
		<?php do_action( 'supro_header' ); ?>
	</header><!-- #masthead -->

	<?php
	/*
	 *  supro_show_page_header - 20
	 */
	do_action( 'supro_after_header' );
	?>

	<div id="content" class="site-content">
		<?php
		/*
		 *	supro_single_post_format - 10
		 *  supro_site_content_open - 20
		 *
		 */
		do_action( 'supro_site_content_open' );
		?>
