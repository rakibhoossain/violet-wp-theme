<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <title><?php wp_title(); ?></title>
    
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="home-preloder">
        <div class="spinner">
          <div class="rect1"></div>
          <div class="rect2"></div>
          <div class="rect3"></div>
          <div class="rect4"></div>
          <div class="rect5"></div>
        </div>
    </div>
    <div id="top"></div>
    <?php $menu_bg = esc_attr( get_theme_mod('menu_bg_color') );
    if ( !is_front_page() ){ ?>

    <header <?php if ( isset($menu_bg) && $menu_bg != ''){ ?> style="background-color: <?php echo $menu_bg ?>" <?php }?>>

    <?php } else{ ?>
    <header><?php }?>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <div class="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php if ( get_header_image() ) : ?>
                        <img src="<?php esc_url( header_image() ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                        <?php endif; ?><?php bloginfo( 'name' ); ?>
                        </a> 
                    </div>
                </div>
                <div class="col-md-8 col-sm-9 mainmenu">
                    <?php wp_nav_menu(array(
                          'theme_location' => 'primary-menu',
                          'echo' => true, 
                          'fallback_cb' => 'violet_nav_fallback')); ?>
                </div>
            </div>
        </div>
        </header>