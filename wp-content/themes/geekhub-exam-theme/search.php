<?php get_header(); ?>
    <div id="content" class="main-content-inner col-sm-12 col-md-8">
	<?php if ( have_posts() ) : ?>
		<header>
			<h2 class="page-title"><?php printf( __( 'Search Results for: %s', '_tk' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
		</header>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'search' ); ?>
		<?php endwhile; ?>
		<?php _tk_pagination(); ?>
	<?php else : ?>
		<?php get_template_part( 'no-results', 'search' ); ?>
	<?php endif;?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>