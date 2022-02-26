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
	<div class="row">
		<div class="site-branding column-3 center">
			<a href="http://clothing.local/"><img src="http://clothingdeliverables2.local/wp-content/uploads/2022/02/logo.png" alt="Fusion Clothing Logo" style="width: 200px;" /></a>
		</div>
		<!-- .site-branding -->
		<div class="column-6 center flex-center">
			<nav id="site-navigation" class="main-navigation">
				<div id="primary-menu" class="menu">
					<ul>
						<li class="page_item page-item-90 current_page_item"><a href="http://clothing.local/" aria-current="page">Home</a></li>
						<li class="page_item">
							<a href="http://clothingdeliverables2.local/about/">About</a>
						</li>
						<li class="page_item page-item-114">
							<a href="http://clothingdeliverables2.local/contact-page/">Contact</a>
						</li>
						<li class="page_item page-item-5"><a href="http://clothingdeliverables2.local/test-block/">Test Block</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- #site-navigation -->
		<div class="icons column-3 center flex-no-width">
		<i class="fa fa-user fa-icon font-custom-style" aria-hidden="true"></i>
            <i class="fa fa-shopping-cart fa-icon font-custom-style" aria-hidden="true"></i>
            <i class="fa fa-search fa-icon font-custom-style" aria-hidden="true"></i>
		</div>
	</div>
</header>
