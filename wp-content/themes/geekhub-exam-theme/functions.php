<?php
 define('THEME_DIR_PATH', get_template_directory());
 define('THEME_DIR_URI', get_template_directory_uri());

if ( ! isset( $content_width ) )
	$content_width = 750;

if ( ! function_exists( '_tk_setup' ) ) :

function _tk_setup() {
	global $cap, $content_width;
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	add_editor_style();
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
	add_theme_support( 'custom-background', apply_filters( '_tk_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );
	load_theme_textdomain( '_tk', THEME_DIR_PATH . '/languages' );
	register_nav_menus( array(
		'primary'  => __( 'Header bottom menu', '_tk' ),
		) );
}
endif;
add_action( 'after_setup_theme', '_tk_setup' );

function _tk_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_tk' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		) );
}
add_action( 'widgets_init', '_tk_widgets_init' );

function _tk_scripts() {
    wp_enqueue_style( 'swiper-slider', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css' );
    wp_enqueue_style( '_tk-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,700' );
	wp_enqueue_style( '_tk-bootstrap-wp', THEME_DIR_URI . '/includes/css/bootstrap-wp.css' );
	wp_enqueue_style( '_tk-bootstrap', THEME_DIR_URI . '/includes/resources/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( '_tk-font-awesome', THEME_DIR_URI . '/includes/css/font-awesome.min.css', false, '4.1.0' );
	wp_enqueue_style( '_tk-style', get_stylesheet_uri() );
	wp_enqueue_script('_tk-bootstrapjs', THEME_DIR_URI . '/includes/resources/bootstrap/js/bootstrap.min.js', array('jquery') );
	wp_enqueue_script( '_tk-bootstrapwp', THEME_DIR_URI . '/includes/js/bootstrap-wp.js', array('jquery') );
	wp_enqueue_script( '_tk-skip-link-focus-fix', THEME_DIR_URI . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );
    wp_enqueue_script( 'swiper-slider-js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js');
    wp_enqueue_script( '_tk-main', THEME_DIR_URI . '/vendors/js/main.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( '_tk-keyboard-image-navigation', THEME_DIR_URI . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', '_tk_scripts' );
require THEME_DIR_PATH . '/includes/custom-header.php';
require THEME_DIR_PATH . '/includes/template-tags.php';
require THEME_DIR_PATH . '/includes/extras.php';
require THEME_DIR_PATH . '/includes/customizer.php';
require THEME_DIR_PATH . '/includes/jetpack.php';
require THEME_DIR_PATH . '/includes/bootstrap-wp-navwalker.php';

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

add_action('init', 'add_clients_type');
function add_clients_type()
{
    $labels = array(
        'name' => _x('Clients', 'post type general name'),
        'singular_name' => _x('Client', 'post type singular name'),
        'add_new' => _x('Add New', 'Client'),
        'add_new_item' => __('Add New Client'),
        'edit_item' => __('Edit Client'),
        'new_item' => __('New Client'),
        'view_item' => __('View Client'),
        'search_items' => __('Search Clients'),
        'not_found' =>  __('No Clients found'),
        'not_found_in_trash' => __('No Clients found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title','editor','thumbnail','excerpt','custom-fields','post-formats'),
        'has_archive' => true
    );
    register_post_type('client',$args);
}

add_action('init', 'add_offer_type');
function add_offer_type()
{
    $labels = array(
        'name' => _x('Offers', 'post type general name'),
        'singular_name' => _x('Offer', 'post type singular name'),
        'add_new' => _x('Add New', 'Offer'),
        'add_new_item' => __('Add New Offer'),
        'edit_item' => __('Edit Offer'),
        'new_item' => __('New Offer'),
        'view_item' => __('View Offer'),
        'search_items' => __('Search Offers'),
        'not_found' =>  __('No Offers found'),
        'not_found_in_trash' => __('No Offers found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title','editor','thumbnail','excerpt','custom-fields','post-formats'),
        'has_archive' => true
    );
    register_post_type('offers',$args);
}