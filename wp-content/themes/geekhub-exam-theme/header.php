<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
<nav class="site-navigation">
	<div class="container">
		<div class="row">
			<div class="site-navigation-inner col-sm-12">
                <a href="<?php get_site_url(); ?>" class="navbar-brand hidden-md hidden-sm hidden-xs">
                    <img src="<?php echo get_theme_mod('site-logo'); ?>" alt="site-logo">
                </a>
				<div class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<?php wp_nav_menu(
						array(
							'theme_location' 	=> 'primary',
							'depth'             => 2,
							'container'         => 'nav',
							'container_id'      => 'navbar-collapse',
							'container_class'   => 'collapse navbar-collapse',
							'menu_class' 		=> 'nav navbar-nav',
							'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
							'menu_id'			=> 'main-menu',
							'walker' 			=> new wp_bootstrap_navwalker()
						)
					); ?>
				</div><!-- .navbar -->
			</div>
		</div>
	</div><!-- .container -->
</nav><!-- .site-navigation -->
        <header id="masthead" class="site-header" role="banner">
            <div class="banner-wrapper">
                <h1 class="page-main-title"><?php the_title(); ?></h1>
                <img src="<?php echo get_theme_mod('header-banner-img'); ?>" alt="">
            </div>
        </header><!-- #masthead -->
<div class="main-content">
	<div class="container">
		<div class="row">


