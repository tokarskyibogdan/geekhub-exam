<article id="post-<?php the_ID(); ?>" class="col-sm-12 col-md-6 blog-post">
    <div class="blog-post-wrapper">
        <a href="<?php the_permalink(); ?>" rel="bookmark" class="post-link">
            <div class="feature-image">
                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                <div class="blog-post-feature-img"><?php the_post_thumbnail(); ?></div>
            </div>
            <div class="blog-post-content">
                <h5 class="blog-post-title"><?php the_title(); ?></h5>
                <p class="blog-post-excerpt"><?php the_excerpt(); ?></p>
                <p class="blog-post-date"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo get_the_date('d,m,Y'); ?></p>
            </div>
        </a>
    </div>
</article>
