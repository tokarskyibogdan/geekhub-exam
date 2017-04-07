<?php if ( post_password_required() )
	return;
?>
	<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<header>
			<h2 class="comments-title">
				<?php
					printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', '_tk' ),
						number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
				?>
			</h2>
		</header>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h5 class="screen-reader-text"><?php _e( 'Comment navigation', '_tk' ); ?></h5>
			<ul class="pager">
				<li class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', '_tk' ) ); ?></li>
				<li class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', '_tk' ) ); ?></li>
			</ul>
		</nav><!-- #comment-nav-above -->
		<?php endif; ?>
		<ol class="comment-list media-list">
			<?php wp_list_comments( array( 'callback' => '_tk_comment', 'avatar_size' => 50 ) ); ?>
		</ol><!-- .comment-list -->
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', '_tk' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', '_tk' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', '_tk' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif;?>
	<?php endif; ?>
	<?php
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', '_tk' ); ?></p>
	<?php endif; ?>
	<?php comment_form( $args = array(
			  'id_form'           => 'commentform',  
			  'id_submit'         => 'commentsubmit',
			  'title_reply'       => __( 'Leave a Reply', '_tk' ), 
			  'title_reply_to'    => __( 'Leave a Reply to %s', '_tk' ),  
			  'cancel_reply_link' => __( 'Cancel Reply', '_tk' ),  
			  'label_submit'      => __( 'Post Comment', '_tk' ),  

			  'comment_field' =>  '<p><textarea placeholder="' . __('Start typing...', '_tk') . '" id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',

			  'comment_notes_after' => '<p class="form-allowed-tags">' .
				__( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:', '_tk' ) .
				'</p><div class="alert alert-info">' . allowed_tags() . '</div>'
	));
	?>
</div><!-- #comments -->
