<?php
/**
 * The Header for The Matter of Records Theme
 *
 * Displays all of the <head> section and everything up until </header>
 *
 * @package WordPress
 * @subpackage GatoGordo
 */
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?> >
<!--<![endif]-->

	<head>
		<!-- CHARSET IN WP DASHBOARD  -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">

		<!-- MOBILE META -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- GOOGLE CHROME FRAME FOR IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- SITE TITLE | PAGE TITLE -->
		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<!-- FAVICON -->
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon"> 
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon"> 
		
		<!-- PINGBACK URL -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class() ?> >
		
		<header>

			<div id="header-content">

				<div id="header-left">
					<nav>
						<?php wp_nav_menu(array('theme_location' => 'header-left')); ?>
					</nav>
				</div>

				<div id="header-right">
					<nav>
						<?php wp_nav_menu(array('theme_location' => 'header-right')); ?>
					</nav>
				</div>

			</div>

		</header>
