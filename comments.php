<?php
/**
 * The template for displaying comments
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments-area wow fadeInUp">
	<?php if ( have_comments() ) : ?>
		<h3 class="comment-title">
			<?php
				printf( _nx( 'One comment', '%1$s comments', get_comments_number(), 'comments title', 'violet' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h3>
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'class' => 'comment-item',
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 56,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_pagination( array(
			'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'violet' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'violet' ) . '</span>',
		) );
		?>



	<?php endif; // have_comments() ?>
	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'violet' ); ?></p>
	<?php endif; ?>


<?php 

$cmnt_args = array(
        'label_submit'=>'Post',
        'title_reply'=>'Leave a comment',
        'comment_notes_before' => '',
        'comment_notes_after' => '',
);

comment_form($cmnt_args);

?>
</div>

<div style="display:none"><?php the_posts_navigation();  paginate_comments_links();?></div>