<?php get_header(); ?>
	<div id="content" class="main-content-inner col-sm-12 col-md-8">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'single' ); ?>
		<?php _tk_pagination(); ?>
		<?php
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>
	<?php endwhile;?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>