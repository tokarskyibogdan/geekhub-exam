<?php get_header(); ?>
<div id="content" class="main-content-inner col-sm-12 col-md-8">
	<div class="content-padder">
		<?php if ( have_posts() ) : ?>
			<header>
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();
						elseif ( is_tag() ) :
							single_tag_title();
						elseif ( is_author() ) :
							the_post();
							printf( __( 'Author: %s', '_tk' ), '<span class="vcard">' . get_the_author() . '</span>' );
							rewind_posts();
						elseif ( is_day() ) :
							printf( __( 'Day: %s', '_tk' ), '<span>' . get_the_date() . '</span>' );
						elseif ( is_month() ) :
							printf( __( 'Month: %s', '_tk' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
						elseif ( is_year() ) :
							printf( __( 'Year: %s', '_tk' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', '_tk' );
						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', '_tk');
						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', '_tk' );
						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', '_tk' );
						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', '_tk' );
						else :
							_e( 'Archives', '_tk' );
						endif;
					?>
				</h1>
				<?php
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
            <?php _tk_pagination(); ?>
		<?php else : ?>
			<?php get_template_part( 'no-results', 'archive' ); ?>
		<?php endif; ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
