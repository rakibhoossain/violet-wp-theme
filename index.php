<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 */
?>
<?php get_header(); ?>

<!-- Single Post -->
    <div class="fixnav-pd">
        <div class="container">
            <div class="row">
            <?php if(have_posts()): ?>
            <div class="col-md-8 pd-bottom-100">
            <?php while ( have_posts() ) : the_post();?>
                
                    <article class="post wow fadeInUp">
                        <div class="featured-content text-center">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(710, 380)); ?></a>
                        </div>
                        <div class="post-title-wrap text-center">
                            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                            <p><?php the_time('F j, Y'); ?> | Posted by <?php the_author_posts_link(); ?></p>
                        </div>
                        <div class="entry-content text-justify">
                            <?php the_excerpt(); ?>
                            <?php wp_link_pages(); ?>               
                        </div>
                    <a href="<?php the_permalink() ?>" class="wpanch"><?php echo sprintf(esc_html__( 'Continue reading..%s', 'violet' ),
                    the_title( '<span class="screen-reader-text">', '</span>', false )
                   ) ; ?></a>
                
                    </article>
                    <?php if ( comments_open() || get_comments_number()) : comments_template(); endif;?>
                
				<?php endwhile;?>
				<!-- Post loop ends -->
            </div>

                <?php 

                // Previous/next page navigation.
                    the_posts_navigation( array(
                    'prev_text'          => __( '<i class="fa fa-chevron-left"></i>', 'violet' ),
                    'next_text'          => __( '<i class="fa fa-chevron-right"></i>', 'violet' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'violet' ) . ' </span>',
                 ) );                        
            else:
                ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>              

				<?php endif; ?>
                <div class="col-md-4">
                   <?php  get_sidebar(); ?>
                </div>
            </div>
        </div>
        <div style="display:none;"><?php get_post_format(); the_tags(); ?></div>
    </div> 

    <!-- Single Post end -->   
<?php get_footer(); ?>
    