<?php
function _tk_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    $wp_customize->add_section( 'header_banner' , array(
        'title'      => __( 'Header banner', '_tk' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'header_banner_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_banner_control', array(
        'label'      => __( 'banner-img', '_tk' ),
        'section'    => 'header_banner',
        'settings'   => 'header_banner_settings',
    ) ) );

    $wp_customize->add_section( 'site-main' , array(
        'title'      => __( 'Site main', '_tk' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'site-logo' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site-logo', array(
        'label'      => __( 'site logo', '_tk' ),
        'section'    => 'site-main',
        'settings'   => 'site-logo',
    ) ) );

    $wp_customize->add_section( 'footer-contact-data' , array(
        'title'      => __( 'Footer contact data', '_tk' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'contact-title' , array(
        'default'   => 'Contact Us',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact-title', array(
        'label'      => __( 'Footer contact title', '_tk' ),
        'section'    => 'footer-contact-data',
        'settings'   => 'contact-title',
    ) ) );

    $wp_customize->add_setting( 'contact-description' , array(
        'default'   => 'Description text here',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact-description', array(
        'label'      => __( 'Footer contact description', '_tk' ),
        'section'    => 'footer-contact-data',
        'settings'   => 'contact-description',
    ) ) );

    $wp_customize->add_setting( 'contact-phone' , array(
        'default'   => '+3 80 03 146 16 33',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact-phone', array(
        'label'      => __( 'Contact phone', '_tk' ),
        'section'    => 'footer-contact-data',
        'settings'   => 'contact-phone',
    ) ) );

    $wp_customize->add_setting( 'contact-address' , array(
        'default'   => '123 Office, Street No 2, Parkview. Sednney, Australia.',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact-address', array(
        'label'      => __( 'Contact address', '_tk' ),
        'section'    => 'footer-contact-data',
        'settings'   => 'contact-address',
    ) ) );


}
add_action( 'customize_register', '_tk_customize_register' );

function _tk_customize_preview_js() {
	wp_enqueue_script( '_tk_customizer', get_template_directory_uri() . '/includes/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', '_tk_customize_preview_js' );
