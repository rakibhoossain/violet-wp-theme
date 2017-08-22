<?php get_header(); ?>
<!-- Single Post -->
    <div class="fixnav-pd">
        <div class="container">
            <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'single' ); ?>
            <?php
                endwhile;
            else:
                ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
                <?php endif; ?>
                <!--End Loop-->
               
                <div class="col-md-4">
                   <?php  get_sidebar(); ?>
                </div>
            </div>
        </div>
        <div style="display:none;"><?php get_post_format(); the_tags(); ?></div>
    </div>  
    <!-- Single Post end -->   
<?php get_footer(); ?>