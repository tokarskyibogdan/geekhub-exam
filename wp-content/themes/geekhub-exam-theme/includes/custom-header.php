<?php

function _tk_custom_header_setup() {
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'custom-header', apply_filters( '_tk_custom_header_args', array(
			'default-image'          => '',
			'default-text-color'     => '000',
			'width'                  => 1170,
			'height'                 => 250,
			'flex-height'            => true,
			'wp-head-callback'       => '_tk_header_style',
			'admin-head-callback'    => '_tk_admin_header_style',
			'admin-preview-callback' => '_tk_admin_header_image',
		) ) );
	}
}
add_action( 'after_setup_theme', '_tk_custom_header_setup' );

if ( ! function_exists( '_tk_header_style' ) ) :
function _tk_header_style() {
	$header_text_color = get_header_textcolor();
	if ( HEADER_TEXTCOLOR == $header_text_color )
		return; ?>
	<style type="text/css">
	<?php
		if ( 'blank' == $header_text_color ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;

if ( ! function_exists( '_tk_admin_header_style' ) ) :
function _tk_admin_header_style() {
?>
	<style type="text/css">
		.appearance_page_custom-header #headimg {
			border: none;
		}
		#headimg h1,
		#desc {
		}
		#headimg h1 {
		}
		#headimg h1 a {
		}
		#desc {
		}
		#headimg img {
		}
	</style>
<?php
}
endif;

if ( ! function_exists( '_tk_admin_header_image' ) ) :

function _tk_admin_header_image() {
	$style        = sprintf( ' style="color:#%s;"', get_header_textcolor() );
	$header_image = get_header_image();
?>
	<div id="headimg">
		<h1 class="displaying-header-text"><a id="name"<?php echo esc_attr( $style ) ; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div class="displaying-header-text" id="desc"<?php echo esc_attr( $style ) ?>><?php bloginfo( 'description' ); ?></div>
		<?php if ( ! empty( $header_image ) ) : ?>
			<img src="<?php echo esc_url( $header_image ); ?>" alt="">
		<?php endif; ?>
	</div>
<?php
}
endif;
