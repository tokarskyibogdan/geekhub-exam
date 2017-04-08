			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->
<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="swiper-container">
                <div class="swiper-wrapper slider">
                    <?php query_posts('post_type=clients'); ?>
                    <?php if(have_posts()) : while (have_posts() ) : the_post(); ?>

                        <div class="swiper-slide slide">
                            <?php the_post_thumbnail(); ?>
                            <h1><?php echo the_title();?></h1>
                        </div>

                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h2 class="footer-contact-title"><?php echo get_theme_mod('contact-title'); ?></h2>
                    <p class="footer-contact-description"><?php echo get_theme_mod('contact-description'); ?></p>
                    <div class="footer-contact-phone">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p><?php echo get_theme_mod('contact-phone'); ?></p>
                    </div>
                    <div class="footer-contact-address">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p><?php echo get_theme_mod('contact-address'); ?></p>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10375.48860485298!2d32.075212799999996!3d49.449133350000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1491642735446" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-sm-12 col-md-6">
                    <?php echo do_shortcode( '[contact-form-7 id="26" title="Contact form 1"]' ); ?>
                </div>
            </div>
        </div><!-- close .container -->
    </div>
    <div class="footer-logo">
        <a href="<?php get_site_url(); ?>">
            <img src="<?php echo get_theme_mod('site-logo'); ?>" alt="site-logo">
        </a>
    </div>
    <div class="rights"> © 2015  All Rights Reserved.</div>
</footer><!-- close #colophon -->

<?php wp_footer(); ?>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        effect: '<?php echo get_theme_mod('slider-effect')?>',
        paginationBulletRender: function (swiper, index, className) {
            return '<span class="' + className + '">' + (index + 1) + '</span>';
        }
    });
</script>
</body>
</html>


