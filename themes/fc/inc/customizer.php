<?php
/**
 * Fusion Clothing Theme Customizer
 *
 * @package Fusion_Clothing
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function fc_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'fc_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'fc_customize_partial_blogdescription',
			)
		);
	}

	$wp_customize->add_panel( 'fc_header_icons', array (
		'title'  =>esc_html__( 'Header Icons', 'fc' )
	) );

	$wp_customize->add_section( 'fc_header_myaccount', array (
		'title'  =>esc_html__( 'My Account Icon', 'fc' ),
		'panel'  => 'fc_header_icons'
	) );

	$wp_customize->add_setting( 'fc_myaccount_icon', array () );

	$wp_customize->add_control( 'fc_myaccount_icon', array(
		'label'   => 'My Account',
		'type'    => 'text',
		'description' => 'Upload My Account Icon which will appear on the header',
		'section' => 'fc_header_myaccount'
	) );

	$wp_customize->add_setting( 'fc_myaccount_url', array () );

	$wp_customize->add_control( 'fc_myaccount_url', array(
		'label'   => 'My Account URL',
		'type'    => 'url',
		'description' => 'Enter the URL for Myaccount Icon including https//:',
		'section' => 'fc_header_myaccount'
	) );

	$wp_customize->add_section( 'fc_header_cart', array (
		'title'  =>esc_html__( 'Cart Icon', 'fc' ),
		'panel'  => 'fc_header_icons'
	) );

	$wp_customize->add_setting( 'fc_cart_icon', array () );

	$wp_customize->add_control( 'fc_cart_icon', array(
		'label'   => 'Cart',
		'type'    => 'text',
		'description' => 'Upload Cart Icon which will appear on the header',
		'section' => 'fc_header_cart'
	) );

	$wp_customize->add_setting( 'fc_cart_url', array () );

	$wp_customize->add_control( 'fc_cart_url', array(
		'label'   => 'Cart URL',
		'type'    => 'url',
		'description' => 'Enter the URL for Cart Icon including https//:',
		'section' => 'fc_header_cart'
	) );

}
add_action( 'customize_register', 'fc_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function fc_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function fc_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function fc_customize_preview_js() {
	wp_enqueue_script( 'fc-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), FC_VERSION, true );
}
add_action( 'customize_preview_init', 'fc_customize_preview_js' );
