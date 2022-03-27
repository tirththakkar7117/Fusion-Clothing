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
<aside id="secondary" class="widget-area">
	<div class="row bg-primary-color">
		<div class="row-3">
	<?php 
	$fashion_style_args = array(
		'post_type'      => array( 'post' ),
		'posts_per_page' => 3,
		'post_status'    => 'publish'
	);
	$fashion_style_args = new WP_Query( $fashion_style_args );
	?>

	<?php
	if( $fashion_style_args->have_posts() ) {
		while( $fashion_style_args->have_posts() ) {
			$fashion_style_args->the_post();?>
			<div class="colm-3">
			<?php 
			the_post_thumbnail();?>
			<h3><a class="custom-color" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php	the_excerpt() ;?>
				</div>
				<?php
		}?>
	</div>
	<?php wp_reset_postdata();
	}
	?>
</div>
	<div class="row bg-primary-color">
		<?php if(has_nav_menu('menu-footer')){ ?>
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
		<?php } ?>
		
		<div class="col-<?php echo has_nav_menu('menu-footer') ? '4' : '8'; ?> ">
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
			<a href="<?php echo esc_url( get_theme_mod( 'fc_facebook_url' ) );?>"><?php echo get_theme_mod( 'fc_facebook_icon' ) ?></a>
			<a href="<?php echo esc_url( get_theme_mod( 'fc_instagram_url' ) );?>"><?php echo get_theme_mod( 'fc_instagram_icon' ) ?></a>
			<a href="<?php echo esc_url( get_theme_mod( 'fc_twitter_url' ) );?>"><?php echo get_theme_mod( 'fc_twitter_icon' ) ?></a>
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
