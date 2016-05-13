<?php
/**
 * ghps Theme Customizer.
 *
 * @package ghps
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ghps_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// remove some of the unused standard controls
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'header_image' );

	$wp_customize->remove_setting( 'header_text' );
	$wp_customize->remove_setting( 'site_icon' );



	// add a setting for the phone number
	$wp_customize->add_setting('ghps_phone_number');
	// Add a control for the phone number
	$wp_customize->add_control('ghps_phone_number', array(
	 'label'   => 'Phone Number',
	  'section' => 'title_tagline',
	 'type'    => 'textbox'
	));

	// add a setting for the email address
	$wp_customize->add_setting('ghps_email_address');
	// Add a control for the email address
	$wp_customize->add_control('ghps_email_address', array(
	 'label'   => 'Email address',
	  'section' => 'title_tagline',
	 'type'    => 'textbox'
	));


	// Add Social Media Section
	$wp_customize->add_section( 'ghps_social_media' , array(
	    'title' => __( 'Social Media', 'ghps' ),
	    'priority' => 30,
	    'description' => __( 'Enter the URL for your social media accounts.', 'ghps' )
	) );

	// Add Facebook Setting
	$wp_customize->add_setting( 'ghps_facebook' );
	$wp_customize->add_control('ghps_facebook', array(
	    'label' => __( 'Facebook', 'ghps' ),
	    'section' => 'ghps_social_media',
	    'settings' => 'ghps_facebook',
	) );


	// Add Twitter Setting
	$wp_customize->add_setting( 'ghps_twitter' );
	$wp_customize->add_control( 'ghps_twitter', array(
	    'label' => __( 'Twitter', 'ghps' ),
	    'section' => 'ghps_social_media',
	    'settings' => 'ghps_twitter',
	) );


}
add_action( 'customize_register', 'ghps_customize_register' );



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ghps_customize_preview_js() {
	wp_enqueue_script( 'ghps_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'ghps_customize_preview_js' );

