<?php
function _tk_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    $wp_customize->add_section( 'front-page' , array(
        'title'      => __( 'Front Page', '_tk' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'front-page-red-section-title' , array(
        'default'   => 'Contact Us',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'front-page-red-section-title', array(
        'label'      => __( 'front page red section title', '_tk' ),
        'section'    => 'front-page',
        'settings'   => 'front-page-red-section-title',
    ) ) );

    $wp_customize->add_setting( 'front-page-red-section-subtitle' , array(
        'default'   => 'Contact Us',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'front-page-red-section-subtitle', array(
        'label'      => __( 'front page red section subtitle', '_tk' ),
        'section'    => 'front-page',
        'settings'   => 'front-page-red-section-subtitle',
    ) ) );

    $wp_customize->add_setting( 'front-page-red-section-stats' , array(
        'default'   => 'Contact Us',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'front-page-red-section-stats', array(
        'label'      => __( 'front-page-red-section-stats', '_tk' ),
        'section'    => 'front-page',
        'settings'   => 'front-page-red-section-stats',
    ) ) );

    $wp_customize->add_setting( 'front-page-red-section-description' , array(
        'default'   => 'Contact Us',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'front-page-red-section-description', array(
        'label'      => __( 'front-page-red-section-description', '_tk' ),
        'section'    => 'front-page',
        'settings'   => 'front-page-red-section-description',
    ) ) );

    $wp_customize->add_setting( 'red-section-img' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'red-section-img', array(
        'label'      => __( 'red-section-img', '_tk' ),
        'section'    => 'front-page',
        'settings'   => 'red-section-img',
    ) ) );

    $wp_customize->add_setting( 'white-section-img' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'white-section-img', array(
        'label'      => __( 'white-section-img', '_tk' ),
        'section'    => 'front-page',
        'settings'   => 'white-section-img',
    ) ) );

    $wp_customize->add_setting( 'white-section-title' , array(
        'default'   => 'Contact Us',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'white-section-title', array(
        'label'      => __( 'white-section-title', '_tk' ),
        'section'    => 'front-page',
        'settings'   => 'white-section-title',
    ) ) );

    $wp_customize->add_setting( 'white-section-description' , array(
        'default'   => 'Contact Us',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'white-section-description', array(
        'label'      => __( 'white-section-description', '_tk' ),
        'section'    => 'front-page',
        'settings'   => 'white-section-description',
    ) ) );

    $wp_customize->add_setting( 'blue-section-title' , array(
        'default'   => 'Contact Us',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'blue-section-title', array(
        'label'      => __( 'blue-section-title', '_tk' ),
        'section'    => 'front-page',
        'settings'   => 'blue-section-title',
    ) ) );

    $wp_customize->add_setting( 'blue-section-description' , array(
        'default'   => 'Contact Us',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'blue-section-description', array(
        'label'      => __( 'blue-section-description', '_tk' ),
        'section'    => 'front-page',
        'settings'   => 'blue-section-description',
    ) ) );

    $wp_customize->add_setting( 'latest-works-title' , array(
        'default'   => 'Contact Us',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'latest-works-title', array(
        'label'      => __( 'latest-works-title', '_tk' ),
        'section'    => 'front-page',
        'settings'   => 'latest-works-title',
    ) ) );

    $wp_customize->add_setting( 'latest-works-description' , array(
        'default'   => 'Contact Us',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'latest-works-description', array(
        'label'      => __( 'latest-works-description', '_tk' ),
        'section'    => 'front-page',
        'settings'   => 'latest-works-description',
    ) ) );

    $wp_customize->add_setting( 'clients-title' , array(
        'default'   => 'Contact Us',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'clients-title', array(
        'label'      => __( 'clients-title', '_tk' ),
        'section'    => 'front-page',
        'settings'   => 'clients-title',
    ) ) );

    $wp_customize->add_section( 'header-banner' , array(
        'title'      => __( 'Header banner', '_tk' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'header-banner-img' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header-banner-img', array(
        'label'      => __( 'header-banner-img', '_tk' ),
        'section'    => 'header-banner',
        'settings'   => 'header-banner-img',
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
