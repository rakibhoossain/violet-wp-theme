<?php 
    $about_section_title = esc_attr( get_theme_mod('about_section_title') ); 
    $about_section_desc = esc_attr( get_theme_mod('about_section_desc') );

    $user_photo = esc_attr( get_theme_mod('user_photo') ); 
    $user_name = esc_attr( get_theme_mod('user_name') );
    $user_age = esc_attr( get_theme_mod('user_age') );
    $user_description = esc_attr( get_theme_mod('user_description') );


    $about_section_button_cv_text = esc_attr( get_theme_mod('about_section_button_cv_text') );
    $about_section_button_cv_link = esc_url( get_theme_mod('about_section_button_cv_link') );    
    $about_section_button_hire_text = esc_attr( get_theme_mod('about_section_button_hire_text') );
    $about_section_button_hire_link = esc_url( get_theme_mod('about_section_button_hire_link') );

?>
    
    <!-- About -->
    <div class="about section-padding" id="about">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 col-md-offset-3">
    				<div class="title text-center">
					<?php if ( isset($about_section_title) && $about_section_title != '') { ?>
						<h2 class="wow fadeInUp"><?php echo $about_section_title; ?></h2>
					<?php } else { ?>
						<h2 class="wow fadeInUp">
						<?php _e( 'About Us','violet'); ?>
						</h2> 
					<?php } ?>

					<?php if ( isset($about_section_desc) && $about_section_desc != '') { ?>
						<p class="wow fadeInUp"><?php echo $about_section_desc; ?></p>
					<?php } else { ?>
						<p class="wow fadeInUp">
							<?php _e( 'Creating your website with violet is completely easy. You just need to perform few tweaks in the theme option panel and your website will be ready to use. You can showcase all important aspects of your business here on home page.','violet'); ?>
						</p> 
					<?php } ?>
    				</div>
    			</div>
	               <?php if($user_photo!=''){?>   
    			<div class="col-md-4">
    				<div class="about-photo">
    					<div class="photo text-center wow fadeInUp">
                            <div class="bottom-right-border"></div>
                        <img src="<?php echo $user_photo; ?>" alt="<?php echo $user_name; ?>" title="<?php echo $user_name; ?>" class="img-responsive" />
    					</div>
    				</div><div class="clear-position"></div>
    			</div><?php }?>
    			<?php if($user_photo==''): ?>
    			<div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
    			<?php else: ?> <div class="col-md-8 col-sm-12"> <?php endif; ?>
    				<div class="about-content">
    					<div class="description wow fadeInUp">
    						<p><?php echo $user_description;?></p>
    					</div>
    					<div class="name_skill wow fadeInUp">
    						<ul>
    							<li><span>NAME</span> : <?php echo $user_name; ?></li>
    							<li><span>JOB</span> TITLE : <?php get_position(true);?></li>
    							<li><span>AgE</span> : <?php echo $user_age; ?></li>
    							<li><span>LOCATION</span> : <?php echo get_contact_address(); ?></li>
    						</ul>
    					</div>
                        <div class="sm-center">
                        <?php if ( isset($about_section_button_cv_text) && $about_section_button_cv_text != '') { ?>
                            <a href="<?php echo $about_section_button_cv_link; ?>" class="violet-btn about-btn wow fadeInLeft">  <?php echo $about_section_button_cv_text; ?> </a>
                        <?php } else { ?> 
                            <a href="#" class="violet-btn about-btn wow fadeInLeft">
                                <?php _e( 'CV','violet'); ?>
                            </a>
                        <?php } ?>
                        <?php if ( isset($about_section_button_hire_text) && $about_section_button_hire_text != '') { ?>
                            <a href="<?php echo $about_section_button_hire_link; ?>" class="violet-btn about-btn wow fadeInRight">  <?php echo $about_section_button_hire_text; ?> </a>
                        <?php } else { ?> 
                            <a href="#" class="violet-btn about-btn wow fadeInRight">
                                <?php _e( 'Hire','violet'); ?>
                            </a>
                        <?php } ?>
                        
                        </div>
    				</div>
    			</div>
				
    		</div>
    	</div>
    </div>