
<?php
//  =============================
//  = Default Theme Customizer Settings  =
//  @ violet Theme
//  =============================


function violet_th_customize_control_enqueue_scripts()
{
    //wp_enqueue_script( 'th-customize-controls', get_template_directory_uri(). '/js/customize-script.js', array( 'customize-controls' ) );
    //wp_register_style( 'ctypo-customize-controls', get_template_directory_uri(). '/css/customize-control.css');
}
add_action('customize_controls_enqueue_scripts', 'violet_th_customize_control_enqueue_scripts');

/*theme customizer*/
function violet_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
    
    //  ==============================
    //  ====== General Settings ======
    //  ==============================
    
    $wp_customize->get_section('title_tagline')->title    = esc_html__('General Settings', 'violet');
    $wp_customize->get_section('title_tagline')->priority = 3;
    //___Header Settings___//
    $wp_customize->add_section('header-settings', array(
        'title' => __('Section Control', 'violet'),
        'description' => __('Which sections do you want to show or hide, simply check', 'violet'),
        'priority' => 6
    ));
    /* show/hide */
    $wp_customize->add_setting('violet_homeslider_show', array(
        'sanitize_callback' => 'violet_sanitize_checkbox',
        'default' => 0,
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control('violet_homeslider_show', array(
        'type' => 'checkbox',
        'label' => __('Enable slider section?', 'violet'),
        'section' => 'header-settings',
        'priority' => 1
    ));
    
    
    /* description show/hide */
    $wp_customize->add_setting('violet_descript_show', array(
        'sanitize_callback' => 'violet_sanitize_checkbox',
        'default' => 0,
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control('violet_descript_show', array(
        'type' => 'checkbox',
        'label' => __('About Us section?', 'violet'),
        'section' => 'header-settings',
        'priority' => 2
    ));
    
    /* Skill show/hide */
    $wp_customize->add_setting('violet_skill_show', array(
        'sanitize_callback' => 'violet_sanitize_checkbox',
        'default' => 0,
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control('violet_skill_show', array(
        'type' => 'checkbox',
        'label' => __('My Skill section?', 'violet'),
        'section' => 'header-settings',
        'priority' => 3
    ));
    /* Services show/hide */
    $wp_customize->add_setting('violet_service_show', array(
        'sanitize_callback' => 'violet_sanitize_checkbox',
        'default' => 0,
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control('violet_service_show', array(
        'type' => 'checkbox',
        'label' => __('My Services section?', 'violet'),
        'section' => 'header-settings',
        'priority' => 4
    ));
    
    /* our counter show/hide */
    $wp_customize->add_setting('violet_counter_show', array(
        'sanitize_callback' => 'violet_sanitize_checkbox',
        'default' => 0,
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control('violet_counter_show', array(
        'type' => 'checkbox',
        'label' => __('Enable counter section?', 'violet'),
        'section' => 'header-settings',
        'priority' => 5
    ));
    /* Portfolio show/hide */
    $wp_customize->add_setting('violet_portfolio_show', array(
        'sanitize_callback' => 'violet_sanitize_checkbox',
        'default' => 0,
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control('violet_portfolio_show', array(
        'type' => 'checkbox',
        'label' => __('Enable Portfolio section?', 'violet'),
        'section' => 'header-settings',
        'priority' => 6
    ));
    /* Testimonial show/hide */
    $wp_customize->add_setting('violet_testimonial_show', array(
        'sanitize_callback' => 'violet_sanitize_checkbox',
        'default' => 0,
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control('violet_testimonial_show', array(
        'type' => 'checkbox',
        'label' => __('Enable Testimonial section?', 'violet'),
        'section' => 'header-settings',
        'priority' => 7
    ));
    
    /* our team show/hide */
    $wp_customize->add_setting('violet_ourteam_show', array(
        'sanitize_callback' => 'violet_sanitize_checkbox',
        'default' => 0,
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control('violet_ourteam_show', array(
        'type' => 'checkbox',
        'label' => __('Enable our team section?', 'violet'),
        'section' => 'header-settings',
        'priority' => 8
    ));
    
    /* our partner show/hide */
    $wp_customize->add_setting('violet_partner_show', array(
        'sanitize_callback' => 'violet_sanitize_checkbox',
        'default' => 0,
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control('violet_partner_show', array(
        'type' => 'checkbox',
        'label' => __('Enable our partner section?', 'violet'),
        'section' => 'header-settings',
        'priority' => 9
    ));
    /* blog show/hide */
    $wp_customize->add_setting('violet_blog_show', array(
        'sanitize_callback' => 'violet_sanitize_checkbox',
        'default' => 0,
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control('violet_blog_show', array(
        'type' => 'checkbox',
        'label' => __('Enable Blog section?', 'violet'),
        'section' => 'header-settings',
        'priority' => 10
    ));
    /* call to action show/hide */
    $wp_customize->add_setting('violet_call_show', array(
        'sanitize_callback' => 'violet_sanitize_checkbox',
        'default' => 0,
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control('violet_call_show', array(
        'type' => 'checkbox',
        'label' => __('Enable Call to action section?', 'violet'),
        'section' => 'header-settings',
        'priority' => 11
    ));
    /* contact to action show/hide */
    $wp_customize->add_setting('violet_contact_show', array(
        'sanitize_callback' => 'violet_sanitize_checkbox',
        'default' => 0,
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control('violet_contact_show', array(
        'type' => 'checkbox',
        'label' => __('Enable Contact Us section?', 'violet'),
        'section' => 'header-settings',
        'priority' => 12
    ));
    
    
           
        //  ===================================
        //  ====      Profile Settings     ====
        //  ===================================
        $wp_customize->add_section('user_profile', array(
            'title' => __('Profile Settings', 'violet'),
            'priority' => 5,
        ));
        
        $wp_customize->add_setting('user_name', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => 'Rakib Hossain'
        ));
        $wp_customize->add_control('user_name', array(
            'label' => __('Name: ', 'violet'),
            'settings' => 'user_name',
            'section' => 'user_profile',
            'type' => 'text',
            'priority' => 1
        ));
        $wp_customize->add_setting('user_age', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'violet_sanitize_int',
            'default' => 21
        ));
        $wp_customize->add_control('user_age', array(
            'label' => __('Age: ', 'violet'),
            'settings' => 'user_age',
            'section' => 'user_profile',
            'type' => 'text',
            'priority' => 2
        ));
    
        $wp_customize->add_setting('user_description', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => __('Expert in Web Design .Taken a training from Basis Institute of Technology and Management (BITM) for the special field of Web Design.','violet'),
        ));
        $wp_customize->add_control('user_description', array(
            'label' => __('About You', 'violet'),
            'settings' => 'user_description',
            'section' => 'user_profile',
            'type' => 'textarea',
            'priority' => 3
        ));
    
        $wp_customize->add_setting('user_skill', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => 'Html,Css,Php'
        ));
        $wp_customize->add_control('user_skill', array(
            'label' => __('Professional skills. Max 3 and Must be comma(,) seperated', 'violet'),
            'settings' => 'user_skill',
            'section' => 'user_profile',
            'type' => 'textarea',
            'priority' => 4
        ));
        $wp_customize->add_setting('user_phone', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => __('+8801776217594','violet')
        ));
        $wp_customize->add_control('user_phone', array(
            'label' => __('Pnone Number: ', 'violet'),
            'settings' => 'user_phone',
            'section' => 'user_profile',
            'type' => 'text',
            'priority' => 5
        ));
        $wp_customize->add_setting('user_email', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => __('serakib@gmail.com','violet')
        ));
        $wp_customize->add_control('user_email', array(
            'label' => __('Email: ', 'violet'),
            'settings' => 'user_email',
            'section' => 'user_profile',
            'type' => 'text',
            'priority' => 6
        ));
        $wp_customize->add_setting('user_address', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => __('Paikpara,Mirpur,Dhaka-1216,Bangladesh','violet')
        ));
        $wp_customize->add_control('user_address', array(
            'label' => __('Your Full Address', 'violet'),
            'settings' => 'user_address',
            'section' => 'user_profile',
            'type' => 'textarea',
            'priority' => 7
        ));
    
        $wp_customize->add_setting('user_address_short', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => __('Dhaka,BD','violet')
        ));
        $wp_customize->add_control('user_address_short', array(
            'label' => __('User Short Address', 'violet'),
            'settings' => 'user_address_short',
            'section' => 'user_profile',
            'type' => 'text',
            'priority' => 8
        ));
    
        // Image
        $wp_customize->add_setting('user_photo', array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => esc_url(get_template_directory_uri() . '/images/rakib.jpg')
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'user_photo', array(
            'label' => __('Profile Photo', 'violet'),
            'section' => 'user_profile',
            'settings' => 'user_photo',
            'priority' => 9
        )));
         
    
    
    if (class_exists('WP_Customize_Panel')):
        $wp_customize->add_panel('panel_section', array(
            'priority' => 7,
            'capability' => 'edit_theme_options',
            'title' => __('Section Settings', 'violet')
        ));
        
        
        
        //  ===================================
        //  ====  Main Section Settings    ====
        //  ===================================
        $wp_customize->add_section('main_section', array(
            'title' => __('Main Section', 'violet'),
            'priority' => 1,
            'description' => 'Main section informaition',
            'panel' => 'panel_section'
        ));
        
        $wp_customize->add_setting('main_section_gretings', array(
            'capability' => 'edit_theme_options',
            'default' => 'Hello',
            'sanitize_callback' => 'violet_sanitize_textarea'
        ));
        $wp_customize->add_control('main_section_gretings', array(
            'label' => __('Gretings', 'violet'),
            'settings' => 'main_section_gretings',
            'section' => 'main_section',
            'type' => 'text',
            'priority' => 1
        ));
        $wp_customize->add_setting('main_section_message', array(
            'capability' => 'edit_theme_options',
            'default' => 'I am Rakib Hossain',
            'sanitize_callback' => 'violet_sanitize_textarea'
        ));
        $wp_customize->add_control('main_section_message', array(
            'label' => __('Message', 'violet'),
            'settings' => 'main_section_message',
            'section' => 'main_section',
            'type' => 'textarea',
            'priority' => 2
        ));
        
        $wp_customize->add_setting('main_section_button_text', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => 'Hire Me'
        ));
        $wp_customize->add_control('main_section_button_text', array(
            'label' => __('Button Text', 'violet'),
            'settings' => 'main_section_button_text',
            'section' => 'main_section',
            'type' => 'text',
            'priority' => 3
        ));
        $wp_customize->add_setting('main_section_button_link', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw',
            'default' => '#'
        ));
        $wp_customize->add_control('main_section_button_link', array(
            'label' => __('Button Link URL', 'violet'),
            'settings' => 'main_section_button_link',
            'section' => 'main_section',
            'type' => 'text',
            'priority' => 4
        ));
        
        // Image
        $wp_customize->add_setting('header_bg', array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => esc_url(get_template_directory_uri() . '/images/header_bg.jpg')
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_bg', array(
            'label' => __('Image', 'violet'),
            'section' => 'main_section',
            'settings' => 'header_bg',
            'priority' => 5
        )));
        
        // Color
        $wp_customize->add_setting('header_color', array(
            'sanitize_callback' => 'sanitize_hex_color',
            'default' => '#7f56fd'
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_color', array(
            'label' => __('Color', 'violet'),
            'section' => 'main_section',
            'settings' => 'header_color',
            'priority' => 7
        )));
        
        /*Opacity */
        $wp_customize->add_setting('header_opacity', array(
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => '0.95',
            'transport' => 'postMessage'
        ));
        
        $wp_customize->add_control('header_opacity', array(
            'label' => __('Background Opacity', 'violet'),
            'section' => 'main_section',
            'priority' => 6
        ));
        
        
        //  ===================================
        //  ==== About Us Section Settings ====
        //  ===================================
        $wp_customize->add_section('about_section', array(
            'title' => __('About US Section', 'violet'),
            'priority' => 2,
            'panel' => 'panel_section'
        ));
        
        $wp_customize->add_setting('about_section_title', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'violet_sanitize_textarea'
        ));
        $wp_customize->add_control('about_section_title', array(
            'label' => __('About Us Title', 'violet'),
            'settings' => 'about_section_title',
            'section' => 'about_section',
            'type' => 'text'
        ));
        $wp_customize->add_setting('about_section_desc', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'violet_sanitize_textarea'
        ));
        $wp_customize->add_control('about_section_desc', array(
            'label' => __('About Us Description', 'violet'),
            'settings' => 'about_section_desc',
            'section' => 'about_section',
            'type' => 'textarea'
        ));
        
        $wp_customize->add_setting('about_section_button_cv_text', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'violet_sanitize_textarea'
        ));
        $wp_customize->add_control('about_section_button_cv_text', array(
            'label' => __('CV Button Text', 'violet'),
            'settings' => 'about_section_button_cv_text',
            'section' => 'about_section',
            'type' => 'text'
        ));
        $wp_customize->add_setting('about_section_button_cv_link', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw',
            'default' => '#'
        ));
        $wp_customize->add_control('about_section_button_cv_link', array(
            'label' => __('CV Button Link URL', 'violet'),
            'settings' => 'about_section_button_cv_link',
            'section' => 'about_section',
            'type' => 'text'
        ));
       $wp_customize->add_setting('about_section_button_hire_text', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'violet_sanitize_textarea'
        ));
        $wp_customize->add_control('about_section_button_hire_text', array(
            'label' => __('Hire Button Text', 'violet'),
            'settings' => 'about_section_button_hire_text',
            'section' => 'about_section',
            'type' => 'text'
        ));
        $wp_customize->add_setting('about_section_button_hire_link', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw',
            'default' => '#'
        ));
        $wp_customize->add_control('about_section_button_hire_link', array(
            'label' => __('Hire Button Link URL', 'violet'),
            'settings' => 'about_section_button_hire_link',
            'section' => 'about_section',
            'type' => 'text'
        ));















        // $wp_customize->add_setting('about_section_button_hire_text', array(
        //     'capability' => 'edit_theme_options',
        //     'sanitize_callback' => 'violet_sanitize_textarea'
        // ));
        // $wp_customize->add_control('about_section_button_hire_text', array(
        //     'label' => __('Parallax Button Text', 'violet'),
        //     'settings' => 'about_section_button_text',
        //     'section' => 'about_section',
        //     'type' => 'text'
        // ));
        // $wp_customize->add_setting('about_section_button_hire_link', array(
        //     'capability' => 'edit_theme_options',
        //     'sanitize_callback' => 'esc_url_raw',
        //     'default' => '#'
        // ));
        // $wp_customize->add_control('about_section_button_hire_link', array(
        //     'label' => __('Hire Button Link URL', 'violet'),
        //     'settings' => 'about_section_button_hire_link',
        //     'section' => 'about_section',
        //     'type' => 'text'
        // ));
        
        /******************************************/
        /**********	MY SKILL SECTION **************/
        /******************************************/
        
        $wp_customize->add_section('violet_myskill_section', array(
            'title' => __('My Skill', 'violet'),
            'priority' => 3,
            'panel' => 'panel_section'
        ));
        
        /* title */
        $wp_customize->add_setting('violet_myskill_title', array(
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => __('My Skill', 'violet'),
            'transport' => 'postMessage'
        ));
        
        $wp_customize->add_control('violet_myskill_title', array(
            'label' => __('Title', 'violet'),
            'section' => 'violet_myskill_section',
            'priority' => 1
        ));
        
        /* our team subtitle */
        $wp_customize->add_setting('violet_myskill_description', array(
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => __('Provide your skill Description.', 'violet'),
            'transport' => 'postMessage'
        ));
        
        $wp_customize->add_control('violet_myskill_description', array(
            'label' => __('Our skill Description', 'violet'),
            'section' => 'violet_myskill_section',
            'priority' => 2,
            'type'     => 'textarea'
        ));
        // Image
        $wp_customize->add_setting('skill_bg', array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => esc_url(get_template_directory_uri() . '/images/skill_bg.jpg')
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'skill_bg', array(
            'label' => __('Image', 'violet'),
            'section' => 'violet_myskill_section',
            'settings' => 'skill_bg',
            'priority' => 3
        )));
        
        // Color
        $wp_customize->add_setting('skill_color', array(
            'sanitize_callback' => 'sanitize_hex_color',
            'default' => '#7f56fd'
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'skill_color', array(
            'label' => __('Color', 'violet'),
            'section' => 'violet_myskill_section',
            'settings' => 'skill_color',
            'priority' => 5
        )));
        
        /* Counter Opacity */
        $wp_customize->add_setting('skill_opacity', array(
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => '0.95',
            'transport' => 'postMessage'
        ));
        
        $wp_customize->add_control('skill_opacity', array(
            'label' => __('Background Opacity', 'violet'),
            'section' => 'violet_myskill_section',
            'type'    =>  'text',
            'priority' => 4
        ));
        
        //  =============================
        //  ====  Service Section    ====
        //  =============================
        
        $wp_customize->add_section('violet_service_section', array(
            'title' => __('Service section', 'violet'),
            'priority' => 4,
            'panel' => 'panel_section',
            'description' => __('The main content of this section is customizable in: Dashboard -> Services Our team section.', 'violet')
        ));
        
        
        
        /* our service title */
        $wp_customize->add_setting('violet_service_title', array(
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => __('Service', 'violet'),
            'transport' => 'postMessage'
        ));
        
        $wp_customize->add_control('violet_service_title', array(
            'label' => __('Title', 'violet'),
            'section' => 'violet_service_section',
            'priority' => 1
        ));
        
        /* our service subtitle */
        $wp_customize->add_setting('violet_service_description', array(
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => __('Provide your service description.', 'violet'),
            'transport' => 'postMessage'
        ));
        
        $wp_customize->add_control('violet_service_description', array(
            'label' => __('Service Description', 'violet'),
            'section' => 'violet_service_section',
            'type' => 'textarea',
            'priority' => 2
        ));
        //  ===================================
        //  ==== Counter Section Settings ====
        //  ===================================
        $wp_customize->add_section('violet_counter_general', array(
            'priority' => 5,
            'panel' => 'panel_section',
            'title' => __('Counter Section', 'violet'),
            'description' => __('*In order to get this section to show up on the front-page, make sure you have: 1) enabled static front-page & 2) have a widget placed in this sidebar. More specifically go to Widgets -> Front page - counter sidebar & place the Violet - Counter widget in here.', 'violet')
        ));
        
        
        // Image
        $wp_customize->add_setting('counter_bg', array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => esc_url(get_template_directory_uri() . '/images/finished_bg.jpg')
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'counter_bg', array(
            'label' => __('Image', 'violet'),
            'section' => 'violet_counter_general',
            'settings' => 'counter_bg',
            'priority' => 1
        )));
        
        // Color
        $wp_customize->add_setting('counter_color', array(
            'sanitize_callback' => 'sanitize_hex_color',
            'default' => '#7f56fd'
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'counter_color', array(
            'label' => __('Color', 'violet'),
            'section' => 'violet_counter_general',
            'settings' => 'counter_color',
            'priority' => 3
        )));
        
        /* Counter Opacity */
        $wp_customize->add_setting('counter_opacity', array(
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => '0.95',
            'transport' => 'postMessage'
        ));
        
        $wp_customize->add_control('counter_opacity', array(
            'label' => __('Background Opacity', 'violet'),
            'section' => 'violet_counter_general',
            'priority' => 2
        ));
        
        //  =============================
        //  ==== Portfolio Section   ====
        //  =============================
        
        $wp_customize->add_section('violet_portfolio_section', array(
            'title' => __('Portfolio section', 'violet'),
            'priority' => 6,
            'panel' => 'panel_section',
            'description' => __('The main content of this section is customizable in: Dashboard -> Protfolio.', 'violet')
        ));
        
        /* portfolio title */
        $wp_customize->add_setting('violet_portfolio_title', array(
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => __('Portfolio', 'violet'),
            'transport' => 'postMessage'
        ));
        
        $wp_customize->add_control('violet_portfolio_title', array(
            'label' => __('Title', 'violet'),
            'section' => 'violet_portfolio_section',
            'priority' => 2
        ));
        
        /* our portfolio subtitle */
        $wp_customize->add_setting('violet_portfolio_subtitle', array(
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => __('Provide your Portfolio Description.', 'violet'),
            'transport' => 'postMessage'
        ));
        
        $wp_customize->add_control('violet_portfolio_subtitle', array(
            'label' => __('Service subtitle', 'violet'),
            'section' => 'violet_portfolio_section',
            'type' => 'textarea',
            'priority' => 3
        ));
        /* our portfolio Category */
        $wp_customize->add_setting('violet_portfolio_category', array(
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => 'Html,css,wordpress',
            'transport' => 'postMessage'
        ));
        
        $wp_customize->add_control('violet_portfolio_category', array(
            'label' => __('Provide your Portfolio Categoties. Must be comma (,) seperated', 'violet'),
            'section' => 'violet_portfolio_section',
            'type' => 'textarea',
            'priority' => 3
        ));

        //  ===================================
        //  ====   Testimonials Section    ====
        //  ===================================
        $wp_customize->add_section('violet_testimonial_general', array(
            'priority' => 7,
            'panel' => 'panel_section',
            'title' => __('Testimonial Section', 'violet'),
            'description' => __('*You Can Change Background Settings.', 'violet')
        ));
        
        
        // Image
        $wp_customize->add_setting('testimonial_bg', array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => esc_url(get_template_directory_uri() . '/images/testimonial_bg.jpg')
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonial_bg', array(
            'label' => __('Image', 'violet'),
            'section' => 'violet_testimonial_general',
            'settings' => 'testimonial_bg',
            'priority' => 2
        )));
        
        // Color
        $wp_customize->add_setting('testimonial_color', array(
            'sanitize_callback' => 'sanitize_hex_color',
            'default' => '#7f56fd'
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'testimonial_color', array(
            'label' => __('Color', 'violet'),
            'section' => 'violet_testimonial_general',
            'settings' => 'testimonial_color',
            'priority' => 2
        )));
        
        /* opacity */
        $wp_customize->add_setting('testimonial_opacity', array(
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => '0.95',
            'transport' => 'postMessage'
        ));
        
        $wp_customize->add_control('testimonial_opacity', array(
            'label' => __('Background Opacity', 'violet'),
            'section' => 'violet_testimonial_general',
            'priority' => 3
        ));
        
        /******************************************/
        /**********	OUR TEAM SECTION **************/
        /******************************************/
        
        $wp_customize->add_section('violet_ourteam_section', array(
            'title' => __('Our Team', 'violet'),
            'priority' => 8,
            'panel' => 'panel_section'
        ));
        
        /* our team title */
        $wp_customize->add_setting('violet_ourteam_title', array(
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => __('YOUR TEAM', 'violet'),
            'transport' => 'postMessage'
        ));
        
        $wp_customize->add_control('violet_ourteam_title', array(
            'label' => __('Title', 'violet'),
            'section' => 'violet_ourteam_section',
            'priority' => 2
        ));
        
        /* our team subtitle */
        $wp_customize->add_setting('violet_ourteam_subtitle', array(
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => __('Prove that you have real people working for you, with some nice looking profile pictures and links to social media.', 'violet'),
            'transport' => 'postMessage'
        ));
        
        $wp_customize->add_control('violet_ourteam_subtitle', array(
            'label' => __('Our team subtitle', 'violet'),
            'section' => 'violet_ourteam_section',
            'type' => 'textarea',
            'priority' => 3
        ));
        
        
        //  ===================================
        //  ====   Partner Section         ====
        //  ===================================
        $wp_customize->add_section('violet_partner_general', array(
            'priority' => 9,
            'panel' => 'panel_section',
            'title' => __('Partner Section', 'violet'),
            'description' => __('*You Can Change Background Settings.', 'violet')
        ));
        
        
        // Image
        $wp_customize->add_setting('partner_bg', array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => esc_url(get_template_directory_uri() . '/images/partner_bg.jpg')
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partner_bg', array(
            'label' => __('Image', 'violet'),
            'section' => 'violet_partner_general',
            'settings' => 'partner_bg',
            'priority' => 2
        )));
        
        // Color
        $wp_customize->add_setting('partner_color', array(
            'sanitize_callback' => 'sanitize_hex_color',
            'default' => '#7f56fd'
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'partner_color', array(
            'label' => __('Color', 'violet'),
            'section' => 'violet_partner_general',
            'settings' => 'partner_color',
            'priority' => 3
        )));
        
        /* opacity */
        $wp_customize->add_setting('partner_opacity', array(
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => '0.95',
            'transport' => 'postMessage'
        ));
        
        $wp_customize->add_control('partner_opacity', array(
            'label' => __('Background Opacity', 'violet'),
            'section' => 'violet_partner_general',
            'priority' => 4
        ));
        
        
        //  =============================
        //  ====  Blogs On HomePage  ====
        //  =============================
        
        $wp_customize->add_section('blog_area', array(
            'title' => __('Blog Area Options', 'violet'),
            'priority' => 10,
            'panel' => 'panel_section'
        ));
        
        $wp_customize->add_setting('blog_title', array(
            'capability' => 'edit_theme_options',
            'default' => __('Blog', 'violet'),
            'sanitize_callback' => 'violet_sanitize_textarea'
        ));
        $wp_customize->add_control('blog_title', array(
            'label' => __('Heading For Blogs', 'violet'),
            'settings' => 'blog_title',
            'section' => 'blog_area',
            'type' => 'text',
            'priority' => 1
        ));
        $wp_customize->add_setting('blog_sub_title', array(
            'capability' => 'edit_theme_options',
            'default' => __('your blog Description', 'violet'),
            'sanitize_callback' => 'violet_sanitize_textarea'
        ));
        $wp_customize->add_control('blog_sub_title', array(
            'label' => __('Heading For Blogs', 'violet'),
            'settings' => 'blog_sub_title',
            'section' => 'blog_area',
            'type' => 'textarea',
            'priority' => 2
        ));
        
        //  ===================================
        //  ====  Call To Action Section   ====
        //  ===================================
        $wp_customize->add_section('violet_call_to_general', array(
            'priority' => 11,
            'panel' => 'panel_section',
            'title' => __('Call To Action Section', 'violet'),
            'description' => __('*You Can Change Background Settings.', 'violet')
        ));
        
        // Image
        $wp_customize->add_setting('call-to-action_bg', array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => esc_url(get_template_directory_uri() . '/images/call-to-action_bg.jpg')
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'orbcall-to-action_bg', array(
            'label' => __('Image', 'violet'),
            'section' => 'violet_call_to_general',
            'settings' => 'call-to-action_bg',
            'priority' => 4
        )));
        
        // Color
        $wp_customize->add_setting('call-to-action_color', array(
            'sanitize_callback' => 'sanitize_hex_color',
            'default' => '#7f56fd',
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'call-to-action_color', array(
            'label' => __('Color', 'violet'),
            'section' => 'violet_call_to_general',
            'settings' => 'call-to-action_color',
            'priority' => 6,
        )));
        
        /* opacity */
        $wp_customize->add_setting('call-to-action_opacity', array(
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => '0.95',
            'transport' => 'postMessage',
        ));
        
        $wp_customize->add_control('call-to-action_opacity', array(
            'label' => __('Background Opacity', 'violet'),
            'section' => 'violet_call_to_general',
            'priority' => 5
        ));
        
        /* mesage */
        $wp_customize->add_setting('violet_call_to_message', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => __('You think we are cool? lets work together', 'violet')
            
        ));
        $wp_customize->add_control('violet_call_to_message', array(
            'label' => __('Cal to action message', 'violet'),
            'settings' => 'violet_call_to_message',
            'section' => 'violet_call_to_general',
            'type' => 'textarea',
            'priority' => 3
        ));
        
        /* btn */
        $wp_customize->add_setting('violet_call_to_btn', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'violet_sanitize_textarea',
            'default' => 'CONTACT US'
        ));
        $wp_customize->add_control('violet_call_to_btn', array(
            'label' => __('Button text', 'violet'),
            'settings' => 'violet_call_to_btn',
            'section' => 'violet_call_to_general',
            'type' => 'text',
            'priority' => 1
        ));
        $wp_customize->add_setting('violet_call_to_link', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw',
            'default' => '#'
        ));
        $wp_customize->add_control('violet_call_to_link', array(
            'label' => __('Button Link URL', 'violet'),
            'settings' => 'violet_call_to_link',
            'section' => 'violet_call_to_general',
            'type' => 'text',
            'priority' => 2
        ));
        
        //  ===================================
        //  ====  Contact Us Section   ====
        //  ===================================
        $wp_customize->add_section('violet_contact_area', array(
            'title' => __('Contact Section Options', 'violet'),
            'description' => __('Provide your Contact info.', 'violet'),
            'priority' => 12,
            'panel' => 'panel_section'
        ));
        
        $wp_customize->add_setting('violet_contact_title', array(
            'capability' => 'edit_theme_options',
            'default' => __('Contact Us.', 'violet'),
            'sanitize_callback' => 'violet_sanitize_textarea'
        ));
        $wp_customize->add_control('violet_contact_title', array(
            'label' => __('Heading Contact Us Section', 'violet'),
            'settings' => 'violet_contact_title',
            'section' => 'violet_contact_area',
            'type' => 'text',
            'priority' => 1
        ));
        $wp_customize->add_setting('violet_contact_sub_title', array(
            'capability' => 'edit_theme_options',
            'default' => __('Provide your Contact Us Description.', 'violet'),
            'sanitize_callback' => 'violet_sanitize_textarea'
        ));
        $wp_customize->add_control('violet_contact_sub_title', array(
            'label' => __('Contact Us Sub title', 'violet'),
            'settings' => 'violet_contact_sub_title',
            'section' => 'violet_contact_area',
            'type' => 'textarea',
            'priority' => 2
        ));
        $wp_customize->add_setting('violet_map_api', array(
            'capability' => 'edit_theme_options',
            'default' => '',
            'sanitize_callback' => 'violet_sanitize_textarea'
        ));
        $wp_customize->add_control('violet_map_api', array(
            'label' => __('Provide your Google map api key to enable map.', 'violet'),
            'settings' => 'violet_map_api',
            'section' => 'violet_contact_area',
            'type' => 'text',
            'priority' => 3
        ));
        
    else:
        $wp_customize->add_section('oh_shit', array(
            'priority' => 6,
            'title' => __('Oh Shit!', 'violet'),
            'description' => __('WP_Customize_Panel class not exist. Contact with your admin', 'violet')
        ));
    endif;
    
         //  =============================
        //  ==== Footer Text Setting ====
        //  =============================
        
        $wp_customize->add_section('footer_text', array(
            'title' => __('Footer Text', 'violet'),
            'priority' => 8,
        ));
        $wp_customize->add_setting('footer_credits', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'violet_sanitize_textarea'
        ));
        $wp_customize->add_control('footer_credits', array(
            'label' => __('Footer Credit Text', 'violet'),
            'section' => 'footer_text',
            'settings' => 'footer_credits',
            'type' => 'textarea'
        ));
    
    //  =============================
    //  ==== Social Media URL's  ====
    //  =============================
    
    $wp_customize->add_section('social_section', array(
        'title' => __('Scoial Media Options', 'violet'),
        'priority' => 10
    ));
    
    $wp_customize->add_setting('social_facebook', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => 'Facebook url'
    ));
    $wp_customize->add_control('social_facebook', array(
        'label' => __('Facebook Page URL', 'violet'),
        'section' => 'social_section',
        'settings' => 'social_facebook',
        'type' => 'text'
    ));
    
    $wp_customize->add_setting('social_twitter', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => 'Twitter url'
    ));
    $wp_customize->add_control('social_twitter', array(
        'label' => __('Twitter Page URL', 'violet'),
        'section' => 'social_section',
        'settings' => 'social_twitter',
        'type' => 'text'
    ));
    
    $wp_customize->add_setting('social_linkedin', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => 'Linkedin url'
    ));
    $wp_customize->add_control('social_linkedin', array(
        'label' => __('Linkedin Page URL', 'violet'),
        'section' => 'social_section',
        'settings' => 'social_linkedin',
        'type' => 'text'
    ));
    
    $wp_customize->add_setting('social_github', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => 'Github url'
    ));
    $wp_customize->add_control('social_github', array(
        'label' => __('Github Page URL', 'violet'),
        'section' => 'social_section',
        'settings' => 'social_github',
        'type' => 'text'
    ));
    
    //  =============================
    //  ====  Custom CSS options ====
    //  =============================
    $wp_customize->get_section('colors')->title = esc_html__('Custom Style', 'violet');
    $wp_customize->add_setting('custom_css', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'violet_sanitize_textarea',
        'priority' => 11
    ));
    $wp_customize->add_control('custom_css', array(
        'label' => __('Custom CSS', 'violet'),
        'section' => 'colors',
        'settings' => 'custom_css',
        'type' => 'textarea',
    ));
    //Menu bg
    $wp_customize->add_setting('menu_bg_color', array(
        'default' => '#454b4e',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'menu_bg_color', array(
        'label' => __('Menu background', 'violet'),
        'section' => 'colors',
        'priority' => 10,
    )));
    //Footer bg
    $wp_customize->add_setting('footer_bg_color', array(
        'default' => '#263238',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_bg_color', array(
        'label' => __('Footer background', 'violet'),
        'section' => 'colors',
        'priority' => 11,
    )));
    
}
add_action('customize_register', 'violet_customize_register');