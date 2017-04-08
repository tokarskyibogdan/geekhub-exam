<?php /** Template Name: Homepage Themplate */ get_header('home'); ?>
    <div id="content pl-0 pr-0" class="main-content-inner">
    <section class="red-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="<?php echo get_theme_mod('red-section-img'); ?>" alt="">
                </div>
                <div class="col-sm-6">
                    <h1><?php echo get_theme_mod('front-page-red-section-title'); ?></h1>
                    <h2><?php echo get_theme_mod('front-page-red-section-subtitle'); ?></h2>
                    <p class="red-section-statistic"><?php echo get_theme_mod('front-page-red-section-stats');?></p>
                    <p class="red-section-description"><?php echo get_theme_mod('front-page-red-section-description');?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="white-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="<?php echo get_theme_mod('white-section-img'); ?>" alt="">
                </div>
                <div class="col-sm-6">
                    <h1><?php echo get_theme_mod('white-section-title'); ?></h1>
                    <p><?php echo get_theme_mod('white-section-description'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="blue-section">
        <div class="container">
            <div class="row">
                <h1><?php echo get_theme_mod('blue-section-title'); ?></h1>
                <p><?php echo get_theme_mod('blue-section-description'); ?></p>
            </div>
            <div class="row">
                <?php query_posts('post_type=offers&posts_per_page=3'); ?>
                <?php if(have_posts()) : while (have_posts() ) : the_post(); ?>
                    <div class="col-sm-4 offer">
                        <div class="offer-img"><?php the_post_thumbnail(); ?></div>
                        <h3 class="offer-title"><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <section class="latest-works">
        <div class="container">
            <div class="row">
                <h1><?php echo get_theme_mod('latest-works-title'); ?></h1>
                <p><?php echo get_theme_mod('latest-works-description'); ?></p>
            </div>
        </div>
    </section>
<?php get_footer(); ?>