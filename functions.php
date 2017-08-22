<?php
//Main Function File
$ajax_nonce = wp_create_nonce('ajax_nonce');
$ajax_url = admin_url('admin-ajax.php');
$contact_email = get_contact_email();

if (!isset($content_width)) $content_width = 1366; /* pixels */
register_nav_menus(array(
  'primary-menu' => __('Primary Menu', 'violet') ,
));

// Page title

function violet_title($title)
  {

  // Get the Site Name

  $site_name = get_bloginfo('name');

  // Prepend name

  $filtered_title = $site_name . $title;

  // If site front page, append description

  if (is_front_page())
    {

    // Get the Site Description

    $site_description = get_bloginfo('description');

    // Append Site Description to title

    $filtered_title.= ' | ' . $site_description;
    }

  // Return the modified title

  return $filtered_title;
  }

// Hook into 'wp_title'

add_filter('wp_title', 'violet_title');
load_theme_textdomain('violet', get_template_directory() . '/languages');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_image_size('violet-featured', 730, 340, true);
add_image_size('violet-portfolio-image', 362, 407, true);
add_image_size('violet-thumbnail', 100, 100, true);
add_theme_support('html5', array(
  'search-form',
  'comment-form',
  'comment-list',
  'gallery',
  'caption'
));
add_editor_style(array(
  'assets/css/editor-style.css',
  violet_fonts_url()
));
add_theme_support('post-formats', array(
  'aside',
  'image',
  'video',
  'quote',
  'link',
  'gallery',
  'status',
  'audio',
  'chat'
));
add_theme_support('automatic-feed-links');

function violet_header_customiz()
  {
  $violet_header = array(
    'default-image' => '',
    'random-default' => false,
    'width' => 40,
    'height' => 0,
    'flex-height' => false,
    'flex-width' => false,
    'default-text-color' => '',
    'header-text' => false,
    'uploads' => true,
    'wp-head-callback' => '',
    'admin-head-callback' => '',
    'admin-preview-callback' => '',
  );
  return $violet_header;
  }

add_theme_support('custom-header', violet_header_customiz());

// require('violet-meta.php');

require get_template_directory() . '/inc/admin/violet-meta.php';

require get_template_directory() . '/inc/activation/plugin-active.php';

function violet_nav_fallback()
  {
  echo '<div class="menu-alert">' . __('Use WordPress Menu builder OR Customizer to Manage Menus', 'violet') . '</div>';
  }

$violet_background = array(
  'default-color' => 'ffffff',
);
add_theme_support('custom-background', $violet_background);

// Disable non supported post formats in admin

add_action('admin_head', 'admin_theme_setup');

function admin_theme_setup()
  {
  }

// Load Fonts

function violet_fonts_url()
  {
  $fonts_url = '';
  /*
  * Translators: If there are characters in your language that are not
  * supported by Libre Franklin, translate this to 'off'. Do not translate
  * into your own language.
  */
  $roboto_font = _x('on', 'Roboto font: on or off', 'violet');
  if ('off' !== $roboto_font)
    {
    $font_families = array();
    $font_families[] = 'Roboto:300,400,400i,500,500i,700,900';
    $query_args = array(
      'family' => urlencode(implode('|', $font_families)) ,
      'subset' => urlencode('latin,latin-ext') ,
    );
    $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
    }

  return esc_url_raw($fonts_url);
  }

add_action('admin_enqueue_scripts', 'violet_admin_scripts');

function violet_admin_scripts()
  {
  wp_enqueue_media();
  wp_enqueue_script('violet_team_widget_script', get_template_directory_uri() . '/inc/admin/js/widget.js', false, '1.0', true);
  wp_enqueue_script('violet-admin-js', get_theme_file_uri('/inc/admin/js/violet-init.js', array(
    'jquery'
  ) , true));
  wp_enqueue_style('violet-admin-css', get_theme_file_uri('/inc/admin/css/violet-init.css'));
  }

add_action('widgets_init', 'violet_widgets_init');

function violet_widgets_init()
  {
  if (function_exists('register_sidebar'))
    {
    register_sidebar(array(
      'name' => 'Sidebar widget Area',
      'id' => 'blog-widget',
      'before_widget' => '<div id="%1$s" class="widget %2$s wow fadeInUp">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>'
    ));

    // Counter Sidebar

    register_sidebar(array(
      'name' => __('Counter Area', 'violet') ,
      'id' => 'counter-sidebar',
      'description' => __('The widgets added in this sidebar will appear in counter section.', 'violet') ,
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '',
      'after_title' => '',
    ));
    }
  }

function violet_scripts()
  {
  wp_enqueue_style('violet-fonts', violet_fonts_url() , array());
  wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css'));
  wp_enqueue_style('fontawesome', get_theme_file_uri('/assets/css/font-awesome.min.css'));
  wp_enqueue_style('animate', get_theme_file_uri('/assets/css/animate.css'));
  wp_enqueue_style('slicknav', get_theme_file_uri('/assets/css/slicknav.min.css'));
  wp_enqueue_style('owl', get_theme_file_uri('/assets/css/owl.carousel.min.css'));
  wp_enqueue_style('owl-theme', get_theme_file_uri('/assets/css/owl.theme.default.css'));
  wp_enqueue_style('owl-style', get_theme_file_uri('/assets/css/owl.style.css'));
  wp_enqueue_style('fancybox', get_theme_file_uri('/assets/css/jquery.fancybox.min.css'));
  wp_enqueue_style('violet', get_stylesheet_uri());

  // JQuery

  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js', array(
    'jquery'
  ) , true));
  wp_enqueue_script('slicknav', get_theme_file_uri('/assets/js/jquery.slicknav.min.js', array(
    'jquery'
  ) , true));

  // For Data short filtering

  wp_enqueue_script('mixitup', get_theme_file_uri('/assets/js/jquery.mixitup.js', array(
    'jquery'
  ) , true));

  // For carosul

  wp_enqueue_script('owl', get_theme_file_uri('/assets/js/owl.carousel.min.js', array(
    'jquery'
  ) , true));

  // For wow animate.css effects

  wp_enqueue_script('wow', get_theme_file_uri('/assets/js/wow.min.js', array(
    'jquery'
  ) , true));

  // For Countring

  wp_enqueue_script('waypoints', get_theme_file_uri('/assets/js/waypoints.min.js', array(
    'jquery'
  ) , true));
  wp_enqueue_script('counterup', get_theme_file_uri('/assets/js/jquery.counterup.min.js', array(
    'jquery'
  ) , true));

  // For Photo Gallery

  wp_enqueue_script('fancybox', get_theme_file_uri('/assets/js/jquery.fancybox.min.js', array(
    'jquery'
  ) , true));

  // For smoth-scrolling

  wp_enqueue_script('move-top', get_theme_file_uri('/assets/js/move-top.js', array(
    'jquery'
  ) , true));
  wp_enqueue_script('easing', get_theme_file_uri('/assets/js/easing.js', array(
    'jquery'
  ) , true));

  // Form validator

  wp_enqueue_script('form-validator', get_theme_file_uri('/assets/js/utils.js'));

  // Custom Javascript

  wp_enqueue_script('violet-js', get_theme_file_uri('/assets/js/main.js', array(
    'jquery'
  ) , '1.12.4', true));
  if (is_singular() && comments_open() && get_option('thread_comments'))
    {
    wp_enqueue_script('comment-reply');
    }
  }

add_action('wp_enqueue_scripts', 'violet_scripts');
require get_template_directory() . '/inc/admin/widgets.php';

function violet_custom_css()
  {
  $custom_css = esc_attr(get_theme_mod('custom_css'));
  echo '<style type="text/css">' . $custom_css . '</style>';
  }

add_action('wp_head', 'violet_custom_css');

function theme_author()
  {
  $name = 'Rakib Hossain';
  $url = 'http://www.facebook.com/prof.rakib';
  return __("Design &amp; Developed by", "violet") . ' <a href="' . $url . '">' . $name . '</a>';
  }

function get_contact_phone()
  {
  $contact_phone = '';
  if (($contact_phone = esc_attr(get_theme_mod('user_phone'))) != '') $contact_phone = esc_attr(get_theme_mod('user_phone'));
  return $contact_phone;
  }

function get_contact_email($public = true)
  {
  $contact_email = '';
  if (($contact_email = esc_attr(get_theme_mod('user_email'))) != '') $contact_email = esc_attr(get_theme_mod('user_email'));
  return $contact_email;
  }

function get_contact_address($full = false)
  {
  $contact_address = '';
  if (($contact_address = esc_attr(get_theme_mod('user_address'))) != '')
  if ($full) return $contact_address;
  if ((esc_attr(get_theme_mod('user_address_short'))) != '') $contact_address = esc_attr(get_theme_mod('user_address_short'));
  return $contact_address;
  }

// Portfolio Category Creator

function get_portfolio_cat($mix = false)
  {
  $portfolio_cat = esc_attr(get_theme_mod('violet_portfolio_category'));
  $arr = explode(',', $portfolio_cat);
  if ($mix == false)
    {
    $arr_string = '';
    $tmp = '';
    foreach($arr as $key => $value)
      {
      $cat_v = strtolower($value);
      $cat_v = trim($cat_v);
      if (strlen($cat_v) < 2) continue;
      $tmp.= ',' . $cat_v;
      }

    $arr_string = substr($tmp, 1);
    $cat_arr = explode(',', $arr_string);
    return $cat_arr;
    }

  if ($mix)
    {
    echo '<li class="filter btn-custom btn-menu" data-filter="all">All</li>';
    foreach($arr as $key => $value)
      {
      $cat_v = strtolower($value);
      $cat_v = trim($cat_v);
      if (strlen($cat_v) < 2) continue;
      echo '<li class="filter btn-custom btn-menu" data-filter=".' . $cat_v . '">' . $value . '</li>';
      }
    }
  }

function get_position($top = false)
  {
  $user_position = esc_attr(get_theme_mod('user_skill'));
  $arr = explode(',', $user_position);
  foreach($arr as $key => $value)
    {
    if ($top)
      {
      echo $value;
      break;
      }

    echo '<li>' . $value . '</li>';
    }
  }

function violet_bg($id)
  {
  $bg = $id . '_bg';
  $img = esc_attr(get_theme_mod($bg));
  if ($img != '') echo "background-image: url(" . $img . ");";
    else echo "";
  }

function violet_overlay($id)
  {
  $opacity = 0.95;
  $co = $id . '_color';
  $color = esc_attr(get_theme_mod($co));
  $opc = $id . '_opacity';
  $opacity = esc_attr(get_theme_mod($opc));
  if (empty($color) || $color == '') return;
  if ($color[0] == '#')
    {
    $color = substr($color, 1);
    }

  $hex = array(
    $color[0] . $color[1],
    $color[2] . $color[3],
    $color[4] . $color[5]
  );
  $rgb = array_map('hexdec', $hex);
  $output = 'rgba(' . implode(",", $rgb) . ',' . $opacity . ')';
  echo "background-color: " . $output . ";";
  }

function get_social_link()
  {
  $social_link = '';
  $social_facebook = esc_url(get_theme_mod('social_facebook', 'Facebook url'));
  $social_twitter = esc_url(get_theme_mod('social_twitter', 'Twitter url'));
  $social_linkedin = esc_url(get_theme_mod('social_linkedin', 'Linkedin url'));
  $social_github = esc_url(get_theme_mod('social_github', 'Github url'));
  if ('' !== get_theme_mod('social_facebook')) $social_link.= '<li><a href="' . $social_facebook . '"><i class="fa fa-facebook">&nbsp;</i></a></li>';
  if ('' !== get_theme_mod('social_twitter')) $social_link.= '<li><a href="' . $social_twitter . '"><i class="fa fa-twitter">&nbsp;</i></a></li>';
  if ('' !== get_theme_mod('social_linkedin')) $social_link.= '<li><a href="' . $social_linkedin . '"><i class="fa fa-linkedin">&nbsp;</i></a></li>';
  if ('' !== get_theme_mod('social_github')) $social_link.= '<li><a href="' . $social_github . '"><i class="fa fa-github">&nbsp;</i></a></li>';
  return $social_link;
  }

// Google map init

function google_map($id = "", $width = "100%", $height = "300px", $address = "", $api="")
  {
  $ed = substr($width, -1) == '%' ? '%' : 'px';
  if ((int)$width < 100 && $ed != '%') $width = '100%';
  if ((int)$height < 50) $height = '100';
  $width = (int)str_replace('%', '', $width);
  $w = $width >= 0 ? 'width:' . $width . $ed . ';' : '';
  $h = $height >= 0 ? 'height:' . $height . 'px;' : '';
  $rez = $w . $h;
  $rez = $rez ? ' style="' . $rez . '"' : '';
  wp_enqueue_script('map_init', get_template_directory_uri() . '/assets/js/map_init.js', array() , '1.0.0', true);
  wp_enqueue_script('map', 'https://maps.googleapis.com/maps/api/js?key='.$api, array() , '3.0.0', true);
  return '
      <script type="text/javascript">
        jQuery(document).ready(function(){
        googlemap_init(jQuery("#' . $id . '").get(0), "' . $address . '");
        });
    </script>

    <div class="contact-map wow fadeInUp">
      <div class="address_block"> 
        ' . $address . '
      </div>
      <div id="' . $id . '"' . $rez . ' class="sc_googlemap"></div>
    </div>
  ';
  }

// contact Form

function contact_form()
  {;
  global $ajax_nonce, $ajax_url;
  return '
  
    <div class="alert alert-warning subscribe" style="display: none;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <span><i class="fa fa-check" aria-hidden="true"></i></span> <strong class="notice"></strong>
    </div>

                    <div class="contact-form">
                        <form method="post" action="' . $ajax_url . '">
                            <div class="form-group wow fadeInUp">
                                <label for="username" id="name">Full Name</label>
                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                            <div class="form-group wow fadeInUp">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group wow fadeInUp">
                                <label for="message">Message</label>
                                <textarea id="message" class="form-control" name="message" rows="3"></textarea>
                            </div>
                            <div class="form-bottom wow fadeInUp">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" id="subscribe" name="subscribe" value="">Subscribe to newslatter
                                </label>
                              </div>
                            <!--<input type="submit" class="btn-custom btn-send" value="Send"> -->
                              <a href="#" class="submit violet-btn send-btn">Send</a>
                            </div>
                            <div class="relative">
                                <div class="message-container">
                                   <div class="result" id="result"></div>       
                                </div>
                            </div>
                        </form>
                    </div>

        <script type="text/javascript">
    (function($) {
      "use strict";

          $(document).ready(function($){
            $(".contact-form #subscribe").click(function(){
              var _this=this;
              if($(_this).val()==""){
                $(_this).val("yes");
              }else{$(_this).val("");}
              
            });
            $(".contact-form .submit").click(function(e){
              userSubmitForm();
              e.preventDefault();
              return false;
            });
  
          function userSubmitForm(){
            var error = formValidate($(".contact-form form"), {
              error_message_show: true,
              error_message_time: 5000,
              error_message_class: "info-error",
              error_fields_class: "error_fields_class",
              exit_after_first_error: true,
              rules: [
                {
                  field: "username",
                  min_length: { value: 3,  message: "Name can\'t not be empty" },
                  max_length: { value: 40, message: "Name too long"}
                },
                {
                  field: "email",
                  min_length: { value: 7,  message: "Email can not be empty" },
                  max_length: { value: 40, message: "Email too long"},
                  mask: { value: "^([a-z0-9_\-]+\\.)*[a-z0-9_\\-]+@[a-z0-9_\-]+(\\.[a-z0-9_\-]+)*\\.[a-z]{2,6}$", message: "Email Incorrect"}
                },
                {
                  field: "message",
                  min_length: { value: 1,  message: "Message can not be empty" },
                  max_length: { value: 250, message: "Too \'long message"}
                }
              ]
            });
            if (!error) {

              var user_name  = $(".contact-form #username").val();
              var user_email = $(".contact-form #email").val();
              var user_msg   = $(".contact-form #message").val();
              var user_subscription   = $(".contact-form #subscribe").val();

              var data = {
                action: "submit_contact_form",
                nonce: "' . $ajax_nonce . '",
                name: user_name,
                email: user_email,
                msg: user_msg,
                is_subscribe: user_subscription
              };
              $.post("' . $ajax_url . '", data, violet_ajax_response, "text");
            }

          }

          function violet_ajax_response(response){
              var rez = JSON.parse(response);
              if (rez.subs_check == "y")
                userSubscriptionResponse(response)

              userSubmitFormResponse(response);            
          }
          
          function userSubmitFormResponse(response) {
            var rez = JSON.parse(response);
            $(".contact-form .result")
              .toggleClass("info-error", false)
              .toggleClass("info-success", false);
            if (rez.mail_error == true) {
              $(".contact-form #subscribe").val("");
              $(".contact-form .result").fadeIn();
              $(".contact-form .result").addClass("info-success").html("Your message sent!");
              $(".contact-form .result").fadeOut(3000);
              $(".contact-form form").get(0).reset();
            } else {
              $(".contact-form .result").addClass("info-error").html("Transmit failed! " + rez.mail_error);
              $(".contact-form .result").fadeIn();
            }
          }
      
          function userSubscriptionResponse(response) {
            var rez = JSON.parse(response);
            $(".subscribe").toggleClass("error", false).toggleClass("success", false);
            $(".subscribe").fadeIn();
            if (rez.subsc_error == true) {
              $(".subscribe").addClass("success");
              $(".subscribe .notice").html("Your Subscription Success!");
            } else {
              $(".subscribe").addClass("error");
              $(".subscribe .notice").html("Subscription failed");
            }
            $(".subscribe").fadeOut(3000);
          }
});

}(jQuery));
</script>

</div>
  ';
  }

// to send mail

require get_template_directory() . '/inc/admin/violet-mail.php';

/**
 * Custom-Customizer additions.
 */
require get_template_directory() . '/inc/admin/custom-customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/admin/customizer.php';

/**
 * Menu style
 */
require get_template_directory() . '/inc/menu.php';

// Unregister Widgets

function violet_remove_widget()
  {
  unregister_widget('WP_Widget_Calendar');
  unregister_widget('WP_Widget_Pages');
  unregister_widget('WP_Widget_Archives');
  unregister_widget('WP_Widget_Links');
  unregister_widget('WP_Widget_Meta');
  unregister_widget('WP_Widget_Text');
  unregister_widget('WP_Widget_Recent_Comments');
  unregister_widget('WP_Widget_RSS');
  unregister_widget('WP_Widget_Tag_Cloud');
  unregister_widget('WP_Nav_Menu_Widget');
  }

add_action('widgets_init', 'violet_remove_widget');