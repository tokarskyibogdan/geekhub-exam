<?php get_header(); ?>
    <div id="content" class="main-content-inner col-sm-12 col-md-8">
	<section class="content-padder error-404 not-found">
		<header>
			<h2 class="page-title"><?php _e( 'Oops! Something went wrong here.', '_tk' ); ?></h2>
		</header>
		<div class="page-content">
			<p><?php _e( 'Nothing could be found at this location. Maybe try a search?', '_tk' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>