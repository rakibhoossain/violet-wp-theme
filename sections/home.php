 <?php 
//Main Section

    $user_gretings = esc_attr( get_theme_mod('main_section_gretings') );
    $main_section_message = esc_attr( get_theme_mod('main_section_message') );

    $main_section_button_text = esc_attr( get_theme_mod('main_section_button_text') );
    $main_section_button_link = esc_url( get_theme_mod('main_section_button_link') );

?>       
           
           
           <div class="main home-height full" style="<?php violet_bg('header');?>">
            <div class="overlay" style="<?php violet_overlay('header');?>"></div>
            <div class="slider">
                <div class="tbel">
                    <div class="tbl-ceell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-6">
                                    <div class="main-slider owl-carousel">

                                        <div class="slide text-center">
                                            <h1 class="wow fadeInDown"><?php echo $user_gretings; ?></h1>
                                            <h1 class="wow fadeInUp"><?php echo $main_section_message; ?></h1>
                                            <div class="cat">
                                                <ul>
                                                    <?php get_position();?>
                                                </ul>
                                            </div>
                                            <a href="<?php echo $main_section_button_link; ?>" class="wow fadeInUp violet-btn slide-btn"><?php echo $main_section_button_text; ?></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container main-social-area">
                <div class="row">
                    <div class="col-md-3 col-md-offset-9">
                        <div class="main-social wow fadeInUp">
                            <ul>
                            <?php echo get_social_link(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>