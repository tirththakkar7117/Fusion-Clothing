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
	<div class="site-branding">
		<p class="site-title"><a href="http://clothing.local/" rel="home">Clothing</a></p>
		<p class="site-description">Just another WordPress site</p>
	</div>
	<!-- .site-branding -->
	<nav id="site-navigation" class="main-navigation">
		<div id="primary-menu" class="menu">
			<ul>
			<li class="page_item page-item-103"><a href="http://clothing.local/about/">About</a></li>
			<li class="page_item page-item-114"><a href="http://clothing.local/contact-page/">Contact</a></li>
			<li class="page_item page-item-90 current_page_item"><a href="http://clothing.local/" aria-current="page">Home</a></li>
			<li class="page_item page-item-2"><a href="http://clothing.local/sample-page/">Sample Page</a></li>
			<li class="page_item page-item-5"><a href="http://clothing.local/test-block/">Test Block</a></li>
			</ul>
		</div>
	</nav>
	<!-- #site-navigation -->
	</header>
