<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Katarina
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header header">
		<div class="header__logo">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
			</a>
		</div>
		<div class="header__phone">
			+381 65 444 33 54
		</div>
		<button class="header__menu-button js-menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <span class="header__menu-button-hamburger js-hamburger-lines"></span>
        </button>
		<div class="header__head-wrap">
			<div class="header__extra-desktop-header">
				<a href="#">
					<div class="header__extra-item">Kontakt</div>
				</a>
				<a href="#">
					<div class="header__extra-item">U medijima</div>
				</a>
				<a href="#">
					<div class="header__extra-item">O nama</div>
				</a>
			</div>
			<nav id="site-navigation" class="header__navigation js-site-navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'class'			 => 'header__menu'
					) );
				?>
			</nav><!-- #site-navigation -->
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
