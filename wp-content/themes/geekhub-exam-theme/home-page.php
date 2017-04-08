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
        </div>
    </section>
<?php get_footer(); ?>