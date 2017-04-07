<?php
function _tk_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', '_tk_page_menu_args' );
function _tk_body_classes( $classes ) {
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	return $classes;
}
add_filter( 'body_class', '_tk_body_classes' );
function _tk_enhanced_image_navigation( $url, $id ) {
	if ( ! is_attachment() && ! wp_attachment_is_image( $id ) )
		return $url;

	$image = get_post( $id );
	if ( ! empty( $image->post_parent ) && $image->post_parent != $id )
		$url .= '#main';

	return $url;
}
add_filter( 'attachment_link', '_tk_enhanced_image_navigation', 10, 2 );
function _tk_wp_title( $title, $sep ) {
	global $page, $paged;
	if ( is_feed() )
		return $title;
	$title .= get_bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title .= " $sep $site_description";
	if ( $paged >= 2 || $page >= 2 )
		$title .= " $sep " . sprintf( __( 'Page %s', '_tk' ), max( $paged, $page ) );
	return $title;
}
add_filter( 'wp_title', '_tk_wp_title', 10, 2 );