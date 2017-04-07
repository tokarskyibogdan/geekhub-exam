			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-12">

                <?php wp_nav_menu(
                    array(
                        'theme_location' 	=> 'footer-menu',
                        'depth'             => 2,
                        'container'         => 'nav',
                        'container_id'      => 'navbar-collapse',
                        'container_class'   => 'collapse navbar-collapse',
                        'menu_class' 		=> 'nav navbar-nav',
                        'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
                        'menu_id'			=> 'footer-menu',
                        'walker' 			=> new wp_bootstrap_navwalker()
                    )
                ); ?>

				<div class="site-info">
					<?php do_action( '_tk_credits' ); ?>
					<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', '_tk' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', '_tk' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
                    <a class="credits" href="http://themekraft.com/" target="_blank" title="Themes and Plugins developed by Themekraft" alt="Themes and Plugins developed by Themekraft"><?php _e('Themes and Plugins developed by Themekraft.','_tk') ?> </a>
				</div><!-- close .site-info -->

			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
