<?php get_header(); ?>
    <div id="content" class="main-content-inner col-sm-12 col-md-8">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
    <div class="blog-pagination">
        <?php echo paginate_links(); ?>
    </div>
	<?php else : ?>
		<?php get_template_part( 'no-results', 'index' ); ?>
	<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>