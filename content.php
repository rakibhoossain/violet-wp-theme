<?php
/**
 * Template part for displaying posts
 *
 */

?>
<?php get_header(); ?>
    <div class="fixnav-pd">
        <div class="container">
            <div class="row">
            <?php if(have_posts()): ?>
            <?php while ( have_posts() ) : the_post();?>
                <div class="col-md-8 pd-bottom-100">
                    <article class="post wow fadeInUp">
                        <div class="featured-content text-center">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        </div>
                        <div class="post-title-wrap text-center">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_time('F j, Y'); ?> | Posted by <a href="#"><?php the_author(); ?></a></p>
                        </div>
                        <div class="entry-content text-justify">
                            <?php the_content(); ?>                        
                        </div>
                    </article>

                    <?php if ( comments_open() || get_comments_number()) : comments_template(); endif;?>
                </div>
				<?php endwhile;?>
				<?php endif; ?>

				<div class="entry-content">
					<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'violet' ),
						get_the_title()
					) );

					wp_link_pages( array(
						'before'      => '<div class="page-links">' . __( 'Pages:', 'violet' ),
						'after'       => '</div>',
						'link_before' => '<span class="page-number">',
						'link_after'  => '</span>',
					) );
					?>
				</div>
                <div class="col-md-4">
                   <?php  get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>  
<?php get_footer(); ?>