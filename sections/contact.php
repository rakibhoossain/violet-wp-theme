<?php 
    $violet_contact_title = esc_attr( get_theme_mod('violet_contact_title') ); 
    $violet_contact_sub_title = esc_attr( get_theme_mod('violet_contact_sub_title') );

    $user_address = esc_attr( get_theme_mod('user_address') );
    $violet_map_api = esc_attr( get_theme_mod('violet_map_api') );
?> 
<!-- contact full -->
    <div class="contact-full section-padding" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="title text-center">
                        <h2 class="wow fadeInUp"><?php echo $violet_contact_title; ?></h2>
                        <p class="wow fadeInUp"><?php echo $violet_contact_sub_title; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                <?php
                    if($user_address && $violet_map_api!='') {
                       echo google_map("map", "100%", "300", $user_address ,$violet_map_api);
                    }
                ?>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <?php echo contact_form(); ?>
                </div>
            </div>
        </div>
    </div>