<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fusion_Clothing
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" style="margin:-28px 0 0 0px;">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
	<div class="row bg-primary-color">
		<div class="col-3">
			<h2 class="center">Quick Links</h2>
			<ul>
				<li class="center li-style">Home</li>
				<li class="center li-style">About</li>
				<li class="center li-style">Contact</li>
			</ul>
		</div>
		<div class="col-6">
		<h2 class="center">About Us</h2>
		<p class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non iaculis risus. Fusce eu felis finibus, dignissim tellus quis, blandit mi. Aliquam ipsum massa, tristique lacinia lacus non, luctus gravida tellus. Praesent facilisis enim eu nibh malesuada, et iaculis elit molestie.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non iaculis risus. Fusce eu felis finibus, dignissim tellus quis, blandit mi. Aliquam ipsum massa, tristique lacinia lacus non, luctus gravida tellus. Praesent facilisis enim eu nibh malesuada, et iaculis elit molestie.</p>
		</div>
		<div class="col-3" style="text-align:center;">
			<h2 class="center">Contact Information</h2>
			<p class="center">Phone: +1 (123)-456-7890</p>
			<p class="center">Email: info@domain.com</p>
			<i class="fa fa-facebook-f white"></i>
			<i class="fa fa-instagram white center"></i>
			<i class="fa fa-twitter white center"></i>
		</div>
	</div>
</aside><!-- #secondary -->