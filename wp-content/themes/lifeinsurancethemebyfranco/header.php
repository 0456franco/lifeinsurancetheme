<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LifeInsuranceThemeByFranco
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lifeinsurancethemebyfranco' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$lifeinsurancethemebyfranco_description = get_bloginfo( 'description', 'display' );
			if ( $lifeinsurancethemebyfranco_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $lifeinsurancethemebyfranco_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="navbar navbar-expand-lg navbar-light bg-light">
			
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lifeinsurancethemebyfranco' ); ?></button>

			<?php

				wp_nav_menu(
					array(
						'theme_location' 	  => 'menu-1',
						'container_class'     => 'collapse navbar-collapse',
						'container'           => 'div',		
						'menu_class'          => 'nav navbar-nav navbar-right',
						'menu_id'             => 'main_navigation_menu',
						'walker'			  => new WPDocs_Walker_Nav_Menu()
					)
				);				

			?>

		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->