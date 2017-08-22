<?php

$rating_list = array(1,2,3,4,5);
//$cat_list = array('development','design','html','c++');

$meta_box_post = array(
    'id' => 'post-meta-box',
    'title' => __('Testimonial Info', 'violet'),
    'page' => 'testimonial',
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        array(
            'name' => __('Full Name', 'violet'),
            'desc' => '',
            'id' => 'name',
            'type' => 'text'
        ),
        array(
            'name' => __('Position', 'violet'),
            'desc' => '',
            'id' => 'position',
            'type' => 'text'
        ),
        array(
            'name' => __('Rating', 'violet'),
            'desc' => '',
            'id' => 'rating',
            'type' => 'select',
            "options" => $rating_list
        )
    )
);
$meta_box_portfolio = array(
    'id' => 'portfolio-meta-box',
    'title' =>  __('Portfolio Info', 'violet'),
    'page' => 'portfolio',
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        array(
            'name' => __('Sub title', 'violet'),
            'desc' => '',
            'id' => 'sub_name',
            'type' => 'text'
        ),
        array(
            'name' => __('Categories', 'violet'),
            'desc' => '',
            'id' => 'portfolio_cat',
            'type' => 'checkbox',
            "options" => get_portfolio_cat()
        ),
        array(
            'name' => __('Portfolio full image', 'violet'),
            'desc' => '',
            'id' => 'portfolio_img',
            'type' => 'file'
        ),
        array(
            'name' => __('Portfolio Link', 'violet'),
            'desc' => '',
            'id' => 'portfolio_link',
            'type' => 'text'
        )
    )
);

$meta_box_team = array(
    'id' => 'team-meta-box',
    'title' =>  __('Team Info', 'violet'),
    'page' => 'team',
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        
        array(
            'name' => __('Full Name', 'violet'),
            'desc' => '',
            'id' => 'team_name',
            'type' => 'text'
        ),
        array(
            'name' => __('Position', 'violet'),
            'desc' => '',
            'id' => 'team_position',
            'type' => 'text'
        ),
        array(
            'name' => '',
            'desc' => __('Enter Social Links', 'violet'),
            'type' => 'info',
            'id'   => ''
        ),
        array(
        'name' => __('Facebook', 'violet'),
            'desc' => __('Ex: http://facebook.com/prof.rakib', 'violet'),
            'id' => 'facebook',
            'type' => 'text',
        ),
        array(
        'name' => __('Twitter', 'violet'),
            'desc' => __('Ex: http://twitter.com/serakib', 'violet'),
            'id' => 'twitter',
            'type' => 'text'
        ),
        array(
        'name' => __('Linkedin', 'violet'),
            'desc' => __('Ex: http://www.linkedin.com/in/serakib', 'violet'),
            'id' => 'linkedin',
            'type' => 'text'
        ),
        array(
        'name' => __('Github', 'violet'),
            'desc' => __('Ex: http://www.github.com/serakib', 'violet'),
            'id' => 'github',
            'type' => 'text'
        ),
        array(
            'name' => '',
            'desc' => __('Enter Top 1 Skill', 'violet'),
            'type' => 'info',
            'id'   => ''
        ),
        array(
        'name' => __('Name', 'violet'),
            'desc' => __('Skill Name (Ex: Photoshop)', 'violet'),
            'id' => 'skill_1_name',
            'type' => 'text'
        ),
        array(
            'name' => __('Percent', 'violet'),
            'desc' => __('Skill Percent out of 100', 'violet'),
            'id' => 'skill_1_percent',
            'type' => 'text'
        ),
        array(
            'name' => __('Color', 'violet'),
            'desc' => __('Skill Color', 'violet'),
            'id' => 'skill_1_color',
            'type' => 'color'
        ),
        array(
            'name' => '',
            'desc' => __('Enter Top 2 Skill', 'violet'),
            'type' => 'info',
            'id'   => ''
        ),
        array(
        'name' => __('Name', 'violet'),
            'desc' => __('Skill Name (Ex: HTML)', 'violet'),
            'id' => 'skill_2_name',
            'type' => 'text'
        ),
        array(
            'name' => __('Percent', 'violet'),
            'desc' => __('Skill Percent out of 100', 'violet'),
            'id' => 'skill_2_percent',
            'type' => 'text'
        ),
        array(
            'name' => __('Color', 'violet'),
            'desc' => __('Skill Color', 'violet'),
            'id' => 'skill_2_color',
            'type' => 'color'
        ),
        array(
            'name' => '',
            'desc' => __('Enter Top 3 Skill', 'violet'),
            'type' => 'info',
            'id'   => ''
        ),
        array(
        'name' => __('Name', 'violet'),
            'desc' => __('Skill Name (Ex: CSS)', 'violet'),
            'id' => 'skill_3_name',
            'type' => 'text'
        ),
        array(
            'name' => __('Percent', 'violet'),
            'desc' => __('Skill Percent out of 100', 'violet'),
            'id' => 'skill_3_percent',
            'type' => 'text'
        ),
        array(
            'name' => __('Color', 'violet'),
            'desc' => __('Skill Color', 'violet'),
            'id' => 'skill_3_color',
            'type' => 'color'
        )

    )
);

$meta_box_skill = array(
    'id' => 'skill-meta-box',
    'title' =>  __('Skill Information', 'violet'),
    'page' => 'skill',
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        array(
            'name' => __('Percent', 'violet'),
            'desc' => __('Skill Percent out of 100', 'violet'),
            'id' => 'skill_percent',
            'type' => 'text'
        ),
        array(
            'name' => __('Color', 'violet'),
            'desc' => __('Skill Color', 'violet'),
            'id' => 'skill_color',
            'type' => 'color'
        )
    )
);

$meta_box_partner = array(
    'id' => 'partner-meta-box',
    'title' =>  __('Partner Info', 'violet'),
    'page' => 'partner',
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        
        array(
            'name' => __('Name', 'violet'),
            'desc' => __('Ex: Intel', 'violet'),
            'id' => 'name',
            'type' => 'text'
        ),
        array(
            'name' => __('Website', 'violet'),
            'desc' => __('Ex: http://www.intel.com', 'violet'),
            'id' => 'website',
            'type' => 'text'
        )
    )
);
add_action('admin_menu', 'add_meta_box_post');

// Add meta box
function add_meta_box_post() {
    global $meta_box_post, $meta_box_team, $meta_box_portfolio, $meta_box_partner, $meta_box_skill;
    
    add_meta_box($meta_box_post['id'], $meta_box_post['title'], 'show_meta_box_post', $meta_box_post['page'], $meta_box_post['context'], $meta_box_post['priority']);
    add_meta_box($meta_box_team['id'], $meta_box_team['title'], 'show_meta_box_team', $meta_box_team['page'], $meta_box_team['context'], $meta_box_team['priority']);
    add_meta_box($meta_box_portfolio['id'], $meta_box_portfolio['title'], 'show_meta_box_portfolio', $meta_box_portfolio['page'], $meta_box_portfolio['context'], $meta_box_portfolio['priority']);
    add_meta_box($meta_box_partner['id'], $meta_box_partner['title'], 'show_meta_box_partner', $meta_box_partner['page'], $meta_box_partner['context'], $meta_box_partner['priority']);
    add_meta_box($meta_box_skill['id'], $meta_box_skill['title'], 'show_meta_box_skill', $meta_box_skill['page'], $meta_box_skill['context'], $meta_box_skill['priority']);
}

// Callback function to show fields in meta box
function show_meta_box_post() {
    global $meta_box_post, $post;

    $upload_url = admin_url('media-upload.php');

    // Use nonce for verification
    echo '<input type="hidden" name="meta_box_post_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    echo '<table class="form-table">';

    foreach ($meta_box_post['fields'] as $field) {
        // get current post meta data
        $meta = get_post_meta($post->ID, $field['id'], true);
        
        echo '<tr>',
                '<th style="width:20%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong></label></th>',
                '<td>';
        switch ($field['type']) {
            case 'info':
                echo '<u>'.$field['desc'].'</u>';
                break;
            case 'text':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="'. $meta. '" style="min-width:30%" /><br />', '
', $field['desc'];
                break;
            case 'select':
                echo '<select name="', $field['id'], '" id="', $field['id'], '" style="min-width:30%">';
                foreach ($field['options'] as $option) {
                    $opt = explode('|', $option);
                    if (count($opt) == 1) $opt[1] = strtolower($opt[0]);
                    echo '<option', $meta == $opt[1] ? ' selected="selected"' : '', ' value="' . $opt[1] . '"' , '>', $opt[0], '</option>';
                }
                echo '</select>', '
', $field['desc'];
                break;
        }
        echo '</td>',
            '</tr>';      
    }
    
    echo '</table>';
}


// Callback function to show fields in meta box
function show_meta_box_team($post) {  

    global $meta_box_team, $post;

    $upload_url = admin_url('media-upload.php');

    // Use nonce for verification
    echo '<input type="hidden" name="meta_box_post_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    echo '<table class="form-table">';

    foreach ($meta_box_team['fields'] as $field) {
        // get current post meta data
        $meta = get_post_meta($post->ID, $field['id'], true);
        
        echo '<tr>',
                '<th style="width:20%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong></label></th>',
                '<td style="margin:0;padding:0;">';
        switch ($field['type']) {
            case 'info':
                echo '<h3 style="margin:0;padding:0;">'.$field['desc'].'</h3>';
                break;
            case 'text':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="'. $meta. '" style="min-width:30%" /><br />', '
', $field['desc'];
                break;
            case 'select':
                echo '<select name="', $field['id'], '" id="', $field['id'], '" style="min-width:30%">';
                foreach ($field['options'] as $option) {
                    $opt = explode('|', $option);
                    if (count($opt) == 1) $opt[1] = strtolower($opt[0]);
                    echo '<option', $meta == $opt[1] ? ' selected="selected"' : '', ' value="' . $opt[1] . '"' , '>', $opt[0], '</option>';
                }
                echo '</select>', '
', $field['desc'];
                break;
            case 'radio':
                foreach ($field['options'] as $option) {
                    echo '<input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />', $option['name'];
                }
                echo '
', $field['desc'];
                break;
            case 'checkbox':
                echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />', '
', $field['desc'];
                break;
                case 'color':
                echo '<input type="color" name="', $field['id'], '" id="', $field['id'], '" value="'. $meta. '" style="min-width:30%" /><br />', '
', $field['desc'];
                break;
                case 'text-sm':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="'. $meta. '" style="min-width:20%" />', '
', $field['desc'], '';
                break;
        }

echo '</td>',
    '</tr>';      
    }
    echo '</table>';
}


// Callback function to show fields in meta box
function show_meta_box_portfolio() {

    global $meta_box_portfolio, $post;

    $upload_url = admin_url('media-upload.php');

    // Use nonce for verification
    echo '<input type="hidden" name="meta_box_post_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    echo '<table class="form-table">';

    foreach ($meta_box_portfolio['fields'] as $field) {
        // get current post meta data
        $meta = get_post_meta($post->ID, $field['id'], true);
        
        echo '<tr>',
                '<th style="width:20%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong></label></th>',
                '<td style="margin:0;padding:0;">';
        switch ($field['type']) {
            case 'info':
                echo '<h3 style="margin:0;padding:0;">'.$field['desc'].'</h3>';
                break;
            case 'text':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="'. $meta. '" style="min-width:30%;" /><br />', '
', $field['desc'];
                break;
            case 'select':
                echo '<select name="', $field['id'], '" multiple id="', $field['id'], '" style="min-width: 30%;">';
                foreach ($field['options'] as $option) {
                    $opt = $option;
                    $opt_up = ucfirst($opt);

                    echo '<option', $meta == $opt ? ' selected="selected"' : '', ' value="' . $opt . '"' , '>', $opt_up, '</option>';
                }
                echo '</select>', '
', $field['desc'];
                break; 
            case 'checkbox':

                function meta_val($m,$opt){
                    if($opt=='') return;
                    $check = ' '.$m;
                    if (strpos($check, $opt)) {
                        $arr = explode(' ',$m);
                        return true;
                    }
                    return false;  
                }

                $i = 0;
                foreach ($field['options'] as $opt) {
                    $itr = count($field['options']);
                    $opt_up = ucfirst($opt);

    echo '<input type="checkbox" value="',$opt, '" class="port_cat" id="port_',$i, '" name="port_',$i, '" ', meta_val($meta,$opt) == true ? ' checked="checked"' : '', ' /><label style="margin-right:10px;" for="port_',$i, '">',$opt_up,'</label>';
                    $i++;
                }
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="'. $meta. '" style="min-width:30%;" /><br />', '
', $field['desc'];
                break;
            case 'file':
                echo '<button type="button" class="button" id="img-', $field['id'], '">Choce</button>';
                if ($meta=='') {
                    echo '<div class="port_img_preview none"><img src="'. $meta.'" id="port_img_preview" alt="File not selected" style="width: 200px; height: auto;"></div>'; 
                }else{
                    echo '<div class="port_img_preview"><img src="'. $meta.'" id="port_img_preview" alt="Portfolio" style="width: 200px; height: auto;"></div>'; 
                }
                echo '<input type="hidden" name="', $field['id'], '" id="', $field['id'], '" value="'. $meta. '"/>', '
', $field['desc'];
                break;
        }

echo '</td>',
    '</tr>';      
    }
    echo '</table>';
}


// Callback function to show fields in meta box
function show_meta_box_partner() {

    global $meta_box_partner, $post;

    $upload_url = admin_url('media-upload.php');

    // Use nonce for verification
    echo '<input type="hidden" name="meta_box_post_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    echo '<table class="form-table">';

    foreach ($meta_box_partner['fields'] as $field) {
        // get current post meta data
        $meta = get_post_meta($post->ID, $field['id'], true);
        
        echo '<tr>',
                '<th style="width:20%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong></label></th>',
                '<td style="margin:0;padding:0;">';
        switch ($field['type']) {
            case 'info':
                echo '<h3 style="margin:0;padding:0;">'.$field['desc'].'</h3>';
                break;
            case 'text':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="'. $meta. '" style="min-width:30%" /><br />', '
', $field['desc'];
                break;
            case 'file':
                echo '<input type="file" name="', $field['id'], '" id="', $field['id'], '"', $meta ? '' : '', ' />', '
', $field['desc'];
                break;
        }

echo '</td>',
    '</tr>';      
    }
    echo '</table>';
}


// Callback function to show fields in meta box
function show_meta_box_skill() {

    global $meta_box_skill, $post;

    $upload_url = admin_url('media-upload.php');

    // Use nonce for verification
    echo '<input type="hidden" name="meta_box_post_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    echo '<table class="form-table">';

    foreach ($meta_box_skill['fields'] as $field) {
        // get current post meta data
        $meta = get_post_meta($post->ID, $field['id'], true);
        
        echo '<tr>',
                '<th style="width:20%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong></label></th>',
                '<td style="margin:0;padding:0;">';
        switch ($field['type']) {
            case 'info':
                echo '<h3 style="margin:0;padding:0;">'.$field['desc'].'</h3>';
                break;
            case 'text':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="'. $meta. '" style="min-width:30%" /><br />', '
', $field['desc'];
                break;
                case 'color':
                echo '<input type="color" name="', $field['id'], '" id="', $field['id'], '" value="'. $meta. '" style="min-width:30%" /><br />', '
', $field['desc'];
                break;
                case 'text-sm':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="'. $meta. '" style="min-width:20%" />', '
', $field['desc'], '';
                break;
        }

echo '</td>',
    '</tr>';      
    }
    echo '</table>';
}



add_action('save_post', 'save_meta_box_post');

// Save data from meta box
function save_meta_box_post($post_id) {
    global $meta_box_post, $meta_box_team, $meta_box_portfolio, $meta_box_partner, $meta_box_skill;
    
    // verify nonce
    if (!isset($_POST['meta_box_post_nonce']) || !wp_verify_nonce($_POST['meta_box_post_nonce'], basename(__FILE__))) {
        return $post_id;
    }

    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }

    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        }
    } else if (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }
    
    foreach ($meta_box_post['fields'] as $field) {
        $new = isset($_POST[$field['id']]) ? $_POST[$field['id']] : '';
        update_post_meta($post_id, $field['id'], $new);
    }
    
    foreach ($meta_box_team['fields'] as $field) {
        $new = isset($_POST[$field['id']]) ? $_POST[$field['id']] : '';
        update_post_meta($post_id, $field['id'], $new);
    }
    foreach ($meta_box_portfolio['fields'] as $field) {
        $new = isset($_POST[$field['id']]) ? $_POST[$field['id']] : '';
        update_post_meta($post_id, $field['id'], $new);
    }
    foreach ($meta_box_partner['fields'] as $field) {
        $new = isset($_POST[$field['id']]) ? $_POST[$field['id']] : '';
        update_post_meta($post_id, $field['id'], $new);
    }
    foreach ($meta_box_skill['fields'] as $field) {
        $new = isset($_POST[$field['id']]) ? $_POST[$field['id']] : '';
        update_post_meta($post_id, $field['id'], $new);
    }

}
?>