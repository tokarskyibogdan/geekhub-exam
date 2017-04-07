<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}
get_header( 'alt' ); ?>
<div id="content" class="main-content-inner col-sm-12 col-md-8">
<div class="container">
	<?php
		do_action( 'woocommerce_before_main_content' );
		?>
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
		<?php endif; ?>
		<?php do_action( 'woocommerce_archive_description' ); ?>
		<?php if ( have_posts() ) : ?>
			<?php
				do_action( 'woocommerce_before_shop_loop' );
				?>
				<?php woocommerce_product_loop_start(); ?>
				<?php woocommerce_product_subcategories(); ?>
				<?php $i=0; ?>
				<div class="row">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-sm-4">
							<?php wc_get_template_part( 'content', 'product' ); ?>
						</div>
						<?php 
						$i++;
						if ($i%3==0) {
							echo '</div><div class="row">';
						} 
						?>
					<?php endwhile; ?>
				</div>
				<?php woocommerce_product_loop_end(); ?>
				<?php
				do_action( 'woocommerce_after_shop_loop' );
				?>
			<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
				<?php wc_get_template( 'loop/no-products-found.php' ); ?>
			<?php endif; ?>
			<?php
		do_action( 'woocommerce_after_main_content' );
		?>
	</div>
	<?php get_footer( 'alt' ); ?>
