<?php 
    $violet_call_to_message = esc_attr( get_theme_mod('violet_call_to_message') ); 

    $violet_call_to_btn = esc_attr( get_theme_mod('violet_call_to_btn') );
    $violet_call_to_link = esc_url( get_theme_mod('violet_call_to_link') );
?>

<!-- Call to action -->
    <div class="call-to-action section-padding" id="blog" style="<?php violet_bg('call-to-action');?>">
        <div class="overlay" style="<?php violet_overlay('call-to-action');?>"></div>
        
        <div class="tbl">
            <div class="tbl-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="wow fadeInUp"><?php echo $violet_call_to_message; ?></h1>
                        </div>
                        <div class="col-md-4 text-center">
                            <a href="<?php echo $violet_call_to_link; ?>" class="wow fadeInUp violet-btn call-to-btn"><?php echo $violet_call_to_btn; ?></a>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </div>