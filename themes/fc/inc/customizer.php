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

	//* Footer Dynamic 
	$wp_customize->add_panel( 'fc_footer_items', array (
		'title'  =>esc_html__( 'Footer Items', 'fc' )
	) );

	$wp_customize->add_section( 'fc_navigation_title_footer', array (
		'title'  =>esc_html__( 'Navigation Section', 'fc' ),
		'panel'  => 'fc_footer_items'
	) );

	$wp_customize->add_setting( 'fc_nav_title', array () );

	$wp_customize->add_control( 'fc_nav_title', array(
		'label'   => 'Footer Navigation Title',
		'type'    => 'text',
		'description' => 'Enter Title:',
		'section' => 'fc_navigation_title_footer'
	) );

	$wp_customize->add_section( 'fc_about_section', array (
		'title'  =>esc_html__( 'About us Section', 'fc' ),
		'panel'  => 'fc_footer_items'
	) );

	$wp_customize->add_setting( 'fc_title', array () );

	$wp_customize->add_control( 'fc_title', array(
		'label'   => 'Enter Heading for Title.',
		'type'    => 'text',
		'description' => 'Enter title For about us content.',
		'section' => 'fc_about_section'
	) );

	$wp_customize->add_setting( 'fc_about_content', array () );

	$wp_customize->add_control( 'fc_about_content', array(
		'label'   => 'Footer About Content',
		'type'    => 'text',
		'description' => 'Enter About Us Content for the Footer.',
		'section' => 'fc_about_section'
	) );

	$wp_customize->add_section( 'fc_contact_section', array (
		'title'  =>esc_html__( 'Contact Information Section', 'fc' ),
		'panel'  => 'fc_footer_items'
	) );

	$wp_customize->add_setting( 'fc_contact_title', array () );

	$wp_customize->add_control( 'fc_contact_title', array(
		'label'   => 'Contact Title',
		'type'    => 'text',
		'description' => 'Enter Title.',
		'section' => 'fc_contact_section'
	) );

	$wp_customize->add_setting( 'fc_phone_information', array () );

	$wp_customize->add_control( 'fc_phone_information', array(
		'label'   => 'Footer Phone Content',
		'type'    => 'text',
		'description' => 'Enter Phone Number:',
		'section' => 'fc_contact_section'
	) );

	$wp_customize->add_setting( 'fc_email_information', array () );

	$wp_customize->add_control( 'fc_email_information', array(
		'label'   => 'Footer Email Content',
		'type'    => 'text',
		'description' => 'Enter Email:',
		'section' => 'fc_contact_section'
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
