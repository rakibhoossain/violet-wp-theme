<?php 
    $violet_portfolio_title = esc_attr( get_theme_mod('violet_portfolio_title') ); 
    $violet_portfolio_subtitle = esc_attr( get_theme_mod('violet_portfolio_subtitle') );
?>
<!-- Portfolio -->
    <div class="portfolio section-padding" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="title text-center">
                        <h2 class="wow fadeInUp"><?php echo $violet_portfolio_title; ?></h2>
                        <p class="wow fadeInUp"><?php echo $violet_portfolio_subtitle ?></p>
                    </div>
                </div>
                <div class="col-md-12 text-center wow fadeInUp" id="items-btm">
                <ul>
                    <?php get_portfolio_cat(true); ?>
                </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row items">
                <?php $args = array( 'post_type' => 'portfolio');
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();

                    $post_id = get_the_ID();
                    $post_custom = get_post_custom($post_id);
                    $portfolio_title = get_the_title();
                    $portfolio_sub = $post_custom["sub_name"][0];
                    $portfolio_cat = $post_custom["portfolio_cat"][0];
                    $portfolio_img = $post_custom["portfolio_img"][0];
                    $portfolio_link = $post_custom["portfolio_link"][0];
                    $portfolio_thumb_url = get_template_directory_uri() . '/screenshot.jpg';
                ?>

                <div class="col-sm-4 col-xs-12 col-md-4 mix <?php echo $portfolio_cat; ?>">
                    <div class="portfolio-item  wow fadeInUp">
                        <div class="portfolio-photo">
                            
                <?php if ( has_post_thumbnail() ) {
                $portfolio_thumb_url = wp_get_attachment_url( get_post_thumbnail_id() );

                }?>

                <div class="portfolio-thumb" style="background-image: url(<?php echo $portfolio_thumb_url;?>);"></div>

                            <div class="portfolio-hover animated zoomIn">
                                <div class="icon">
                                <?php
                                    if (strlen($portfolio_link)>=5) {?>

<a href="<?php echo $portfolio_link; ?>" target="_blank"><i class="fa fa-search"></i></a>
                                    <?php
                                    } else {?>
<a href="<?php echo $portfolio_img; ?>" data-fancybox="images" data-caption="<?php echo $portfolio_title; ?>"><i class="fa fa-search"></i></a>                                        
                                    <?php } ?>

                                    

                                </div>
                                <div class="footer">
                                    <h3><?php echo $portfolio_title; ?></h3>
                                    <p><?php echo $portfolio_sub; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php endwhile;?>


            </div>
        </div>
    </div>
<div class="clear-position"></div>