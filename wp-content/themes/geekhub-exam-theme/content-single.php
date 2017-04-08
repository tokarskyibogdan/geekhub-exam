<article id="post-<?php the_ID(); ?>" class="single-blog-post">
        <div class="single-post-feature-img"><?php the_post_thumbnail(); ?></div>
        <h1 class="single-post-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
</article><!-- #post-## -->
