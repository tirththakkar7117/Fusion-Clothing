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
			//* Custom WP_Query to display posts in the footer.
			<?php 
			$fashion_style_args = array(
				//* Post type set to post
				'post_type'      => array( 'post' ),
				//* Display 3 Posts per page.
				'posts_per_page' => 3,
				//* Check the post status to publish.
				'post_status'    => 'publish'
			);
			//* Update the query to take above parameters.
			$fashion_style_args = new WP_Query( $fashion_style_args );
			?>
			<?php
			//* Check to see if the query have posts
			if( $fashion_style_args->have_posts() ) {
				//* while it have posts, it displays the post.
				while( $fashion_style_args->have_posts() ) {
					$fashion_style_args->the_post();?>
					//* post will show in 3 columns
					<div class="colm-3">
						//* Show the post thumbnail
						<?php the_post_thumbnail(); ?>
						//* Show the post title in h3 and link to that specific post
						<h3>
							<a class="custom-color" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>
						//* Show the post excerpt.
						<?php the_excerpt() ;?>
					</div>
					<?php
				}?>
			</div>
			//* Reset the post data.
			<?php wp_reset_postdata();
			}
			?>
		</div>
	<div class="row bg-primary-color">
		//* Check to see if meu-footer is selected
		<?php if(has_nav_menu('menu-footer')){ ?>
			<div class="col-4">
				<h2 class="center">
					//* Navigation title for quick links.
					<?php echo get_theme_mod( 'fc_nav_title' ) ?>
				</h2>
				//* Show the menu-footer
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
		//* if menu-footer is selected, set the columns layout to 4, else 8.
		<div class="col-<?php echo has_nav_menu('menu-footer') ? '4' : '8'; ?> ">
			<h2 class="center">
				//* title of the footer 
			<?php echo get_theme_mod( 'fc_title' ) ?>
			</h2>
			<p class="center">
				//* about us content
			<?php echo get_theme_mod( 'fc_about_content' ) ?>
			</p>
			</div>
			<div class="col-4" style="text-align:center;">
				<h2 class="center">
					//* show the contant section title
				<?php echo get_theme_mod( 'fc_contact_title' ) ?>
				</h2>
				<p class="center">
					//* Show phone information
				<?php echo get_theme_mod( 'fc_phone_information' ) ?>
				</p>
				<p class="center">
					//* Show email information
				<?php echo get_theme_mod( 'fc_email_information' ) ?>
				</p>
				//* Get the facebook icon and set the link of that icon
				<a href="<?php echo esc_url( get_theme_mod( 'fc_facebook_url' ) );?>"><?php echo get_theme_mod( 'fc_facebook_icon' ) ?></a>
				//* Get the instagram icon and set the link of that icon
				<a href="<?php echo esc_url( get_theme_mod( 'fc_instagram_url' ) );?>"><?php echo get_theme_mod( 'fc_instagram_icon' ) ?></a>
				//* Get the twitter icon and set the link of that icon
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
