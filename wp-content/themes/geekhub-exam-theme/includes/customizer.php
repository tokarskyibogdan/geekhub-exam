<?php
function _tk_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

//    $wp_customize->add_section( 'header' , array(
//        'title'      => __( 'Header', '_tk' ),
//        'priority'   => 30,
//    ) );
//
//    $wp_customize->add_setting( 'blog-name-left' , array(
//        'default'   => 'Blog Name Left',
//        'transport' => 'refresh',
//    ) );
//
//    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'blog-name-left', array(
//        'label'      => __( 'Blog Name Left', '_tk' ),
//        'section'    => 'header',
//        'settings'   => 'blog-name-left',
//    ) ) );



}
add_action( 'customize_register', '_tk_customize_register' );

function _tk_customize_preview_js() {
	wp_enqueue_script( '_tk_customizer', get_template_directory_uri() . '/includes/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', '_tk_customize_preview_js' );