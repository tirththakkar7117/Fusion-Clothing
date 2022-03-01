<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fusion_Clothing
 */

?>
<aside id="secondary" class="widget-area" style="margin:-28px 0 0 0px;">
	<div class="row bg-primary-color">
		<div class="col-4">
			<h2 class="center">
			<?php echo get_theme_mod( 'fc_nav_title' ) ?>
			</h2>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-footer',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
		</div>
		<div class="col-4">
		<h2 class="center">
		<?php echo get_theme_mod( 'fc_title' ) ?>
		</h2>
		<p class="center">
		<?php echo get_theme_mod( 'fc_about_content' ) ?>
		</p>
		</div>
		<div class="col-4" style="text-align:center;">
			<h2 class="center">
			<?php echo get_theme_mod( 'fc_contact_title' ) ?>
			</h2>
			<p class="center">
			<?php echo get_theme_mod( 'fc_phone_information' ) ?>
			</p>
			<p class="center">
			<?php echo get_theme_mod( 'fc_email_information' ) ?>
			</p>
			<i class="fa fa-facebook-f white"></i>
			<i class="fa fa-instagram white center"></i>
			<i class="fa fa-twitter white center"></i>
		</div>
	</div>
</aside>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Copyright @ 2022 - Fusion Clothing', 'fc' ), 'Fusion Clothing' );
				?>
			</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
