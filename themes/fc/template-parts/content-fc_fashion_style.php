<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fusion_Clothing
 */

if( ! is_singular( 'fc_fashion_style' ) ) {
	?>
	<div class="colm-3">
    <article id="padding custom-post-bg post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <?php fc_post_thumbnail(); ?>
        <?php
            if ( is_singular() ) :
                the_title( '<h1 class="entry-title center">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title center"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;

            if ( 'post' === get_post_type() ) :
                ?>
            <?php endif; ?>

        <div class="entry-content width-auto">
            <?php
            the_excerpt(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fc' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                )
            ); ?>
            <div class="entry-meta">
                    
                </div><!-- .entry-meta -->

                <?php
            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fc' ),
                    'after'  => '</div>',
                )
            );
            ?>
        </div><!-- .entry-content --></div>

        <footer class="entry-footer">
        </footer><!-- .entry-footer -->
    </article><!-- #post-<?php the_ID(); ?> -->

	<?php
} else { ?>
    <article id="custom-post-bg post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header post-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php fc_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fc' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		); ?>
		<div class="entry-meta">
				<?php
				fc_posted_on();
				fc_posted_by();
				?>
			</div><!-- .entry-meta -->
			<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fc' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php fc_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article>
<?php } ?>
