<?php
/**
 * Template part for Search result.
 *
 */
?>

<?php get_header(); ?>
    <div class="container pd-100">
        <div class="row">
            <div class="col-md-8">
                <article class="post wow fadeInUp">
                    <div class="post-title-wrap">
						<?php if ( have_posts() ) : ?>
							<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'violet' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						<?php else : ?>
							<h1 class="page-title"><?php _e( 'Nothing Found', 'violet' ); ?></h1>
						<?php endif; ?>
                    </div>
                    <div class="entry-content">    
						<?php
						if ( have_posts() ) :
							while ( have_posts() ) : the_post();
								get_template_part( 'violet', 'excerpt' );
							endwhile;
							the_posts_pagination( array(
								'prev_text' => '<span class="screen-reader-text">' . __( 'Previous page', 'violet' ) . '</span>',
								'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'violet' ) . '</span>',
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'violet' ) . ' </span>',
							) );
						else : ?>
							<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'violet' ); ?></p>
							<?php
								get_search_form();
						endif;
						?>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <?php  get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>