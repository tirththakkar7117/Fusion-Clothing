<?php
/**
* Template Name: Blog Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fusion_Clothing
 */


?>

<div class="colm-3">
    <article id="custom-post-bg post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
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
