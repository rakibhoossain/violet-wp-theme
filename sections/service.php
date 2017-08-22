<!-- Services -->
<?php 
    $violet_service_title = esc_attr( get_theme_mod('violet_service_title') ); 
    $violet_service_description = esc_attr( get_theme_mod('violet_service_description') );
?>
    <div class="services section-padding" id="service">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 col-md-offset-3">
    				<div class="title text-center">
    					<h2 class="wow fadeInUp"><?php echo $violet_service_title; ?></h2>
    					<p class="wow fadeInUp"><?php echo $violet_service_description; ?></p>
    				</div>
    			</div>
			</div>
		</div>
		<div class="container">
			<div class="row">

			    <?php $args = array( 'post_type' => 'services', 'posts_per_page' => 3 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
                    if ( has_post_thumbnail() ) {
                        $service_bg = wp_get_attachment_url( get_post_thumbnail_id() );
                    }
                ?>
    			<div class="col-md-4 col-sm-6">
    				<div class="service text-center"><a href="<?php the_permalink(); ?>">
    					<div class="service-icon text-center wow fadeInUp" style="background-image: url(<?php echo $service_bg;?>);"></div></a>
    					<div class="service-title">
    						<a href="<?php the_permalink(); ?>"><h4 class="wow fadeInUp"><?php the_title()?></h4></a>
    					</div>
    					<div class="service-about wow fadeInUp">
    					<?php the_content()?>
    					</div>
    				</div>
    			</div>				
				<?php endwhile;?>

    		</div>
    	</div>
    </div>