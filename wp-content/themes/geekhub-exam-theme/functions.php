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
    register_nav_menus( array(
        'footer-menu'  => __( 'Footer menu', '_tk' ),
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
    wp_enqueue_style( '_tk-fonts', 'https://fonts.googleapis.com/css?family=Oswald:300,400,700' );
	wp_enqueue_style( '_tk-bootstrap-wp', THEME_DIR_URI . '/includes/css/bootstrap-wp.css' );
	wp_enqueue_style( '_tk-bootstrap', THEME_DIR_URI . '/includes/resources/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( '_tk-font-awesome', THEME_DIR_URI . '/includes/css/font-awesome.min.css', false, '4.1.0' );
	wp_enqueue_style( '_tk-style', get_stylesheet_uri() );
	wp_enqueue_script('_tk-bootstrapjs', THEME_DIR_URI . '/includes/resources/bootstrap/js/bootstrap.min.js', array('jquery') );
	wp_enqueue_script( '_tk-bootstrapwp', THEME_DIR_URI . '/includes/js/bootstrap-wp.js', array('jquery') );
	wp_enqueue_script( '_tk-skip-link-focus-fix', THEME_DIR_URI . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );
    wp_enqueue_script( 'swiper-slider-js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js');

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

//add_action('init', 'add_slides_type');
//function add_slides_type()
//{
//    $labels = array(
//        'name' => _x('Slides', 'post type general name'),
//        'singular_name' => _x('Slide', 'post type singular name'),
//        'add_new' => _x('Add New', 'Post'),
//        'add_new_item' => __('Add New Slide'),
//        'edit_item' => __('Edit Slide'),
//        'new_item' => __('New Slide'),
//        'view_item' => __('View Slide'),
//        'search_items' => __('Search Slides'),
//        'not_found' =>  __('No Slides found'),
//        'not_found_in_trash' => __('No Slides found in Trash'),
//        'parent_item_colon' => ''
//    );
//    $args = array(
//        'labels' => $labels,
//        'public' => true,
//        'publicly_queryable' => true,
//        'show_ui' => true,
//        'query_var' => true,
//        'rewrite' => true,
//        'capability_type' => 'post',
//        'hierarchical' => false,
//        'menu_position' => 5,
//        'supports' => array('title','editor','thumbnail','excerpt','custom-fields','post-formats'),
//        'has_archive' => true
//    );
//    register_post_type('slides',$args);
//}

// Register custom category widget
//function custom_category_widgets_init() {
//    register_widget( 'WP_Widget_Categories_custom' );
//}
//add_action( 'widgets_init', 'custom_category_widgets_init' );
//class WP_Widget_Categories_Custom extends WP_Widget {
//    function __construct()
//    {
//        $widget_ops = array( 'classname' => 'widget_categories widget_categories_custom', 'description' => __( "A list of categories, with slightly tweaked output.", 'mytextdomain'  ) );
//        parent::__construct( 'categories_custom', __( 'Categories Custom', 'mytextdomain' ), $widget_ops );
//    }
//    function widget( $args, $instance )
//    {
//        extract( $args );
//        $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? __( 'Categories Custom', 'mytextdomain'  ) : $instance['title'], $instance, $this->id_base);
//        echo $before_widget;
//        if ( $title )
//            echo $before_title . $title . $after_title;
//        ?>
<!--        <ul>-->
<!--            --><?php
//            $pattern = '#<li([^>]*)><a([^>]*)>(.*?)<\/a>\s*\(([0-9]*)\)\s*<\/li>#i';
//            $replacement = '<li$1><a$2><span class="cat-name">$3</span> <span class="cat-count">($4)</span></a>';
//            $args = array(
//                'orderby'       => 'name',
//                'order'         => 'ASC',
//                'show_count'    => 1,
//                'title_li'      => '',
//                'exclude'       => '2,5,31',
//                'echo'          => 0,
//                'depth'         => 1,
//            );
//            $subject      = wp_list_categories( $args );
//            echo preg_replace( $pattern, $replacement, $subject );
//            ?>
<!--        </ul>-->
<!--        --><?php
//        echo $after_widget;
//    }
//    function update( $new_instance, $old_instance )
//    {
//        $instance = $old_instance;
//        $instance['title'] = strip_tags( $new_instance['title'] );
//        $instance['count'] = 1;
//        $instance['hierarchical'] = 0;
//        $instance['dropdown'] = 0;
//        return $instance;
//    }
//    function form( $instance )
//    {
//        $instance = wp_parse_args( (array) $instance, array( 'title' => '') );
//        $title = esc_attr( $instance['title'] );
//        $count = true;
//        $hierarchical = false;
//        $dropdown = false;
//        ?>
<!--        <p>-->
<!--            <label for="--><?php //echo $this->get_field_id('title', 'mytextdomain' ); ?><!--">--><?php //_e( 'Title:', 'mytextdomain'  ); ?><!--</label>-->
<!--            <input class="widefat" id="--><?php //echo $this->get_field_id('title'); ?><!--" name="--><?php //echo $this->get_field_name('title'); ?><!--" type="text" value="--><?php //echo $title; ?><!--" />-->
<!--        </p>-->
<!--        <input type="checkbox" class="checkbox" id="--><?php //echo $this->get_field_id('count'); ?><!--" name="--><?php //echo $this->get_field_name('count'); ?><!--" --><?php //checked( $count ); ?><!-- disabled="disabled" />-->
<!--        <label for="--><?php //echo $this->get_field_id('count'); ?><!--">--><?php //_e( 'Show post counts', 'mytextdomain'  ); ?><!--</label>-->
<!--        <br />-->
<!--        --><?php
//    }
//}
