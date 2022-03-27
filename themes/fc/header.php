<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fusion_Clothing
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<header id="masthead" class="site-header">
	//* Start of dynamic header
	<div class="row">
		//* div which will use 3 columns layout and all the content in center
		<div class="site-branding column-3 center">
		<?php
			the_custom_logo();
			//* if statement to check if the page is front page and homepage.
			if ( is_front_page() && is_home() ) :
				?>
				//* if it is, then it will show the site title
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				//* if not then it will show as a p tag.
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$fc_description = get_bloginfo( 'description', 'display' );
			if ( $fc_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $fc_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>
		<!-- .site-branding -->
		<?php if(has_nav_menu('menu-primary')){ ?>
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-primary',
					'menu_id'        => 'primary-menu',
				)
			);
		}?>
		</nav><!-- #site-navigation -->
		//* if there is menu selected, it will be in 3 column layout or it will be in 6 column layout
		<div class="icons column-<?php echo has_nav_menu('menu-primary') ? '3' : '6'; ?> center flex-no-width">
		//* call my account url to show in the header
			<a href="<?php echo get_theme_mod( 'fc_myaccount_url' ) ?>">
			//* call my account icon to show in the header
			<?php echo get_theme_mod( 'fc_myaccount_icon' ) ?></a>
			//* call cart url to show in the header
			<a href="<?php echo get_theme_mod( 'fc_cart_url' ) ?>">
			//* call cart icon to show in the header
			<?php echo get_theme_mod( 'fc_cart_icon' ) ?></a>
			<!--<i class="fa fa-search fa-icon font-custom-style" aria-hidden="true"></i> -->
			//* Display the search form
			<?php get_search_form(); ?>
		</div>
	</div>
</header>
