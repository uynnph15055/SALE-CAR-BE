<?php
/**
 * Theme function.
 * Version: 1.0
 */
$theme = wp_get_theme( 'vietnewday' );
define("THEME_VER", $theme['Version']);
define( 'THEME_URL', get_stylesheet_directory() );
define( 'TEMP_DIR', get_template_directory() );
define( 'DIR_URI', get_stylesheet_directory_uri() );
const TEXT_DOMAIN = 'vietnewday';
const CORE = THEME_URL . '/core';

load_theme_textdomain( TEXT_DOMAIN, TEMP_DIR . '/languages' );

require_once( CORE . '/init.php' );


$list_files = array(
    "/includes/class_customizes.php",
    "/includes/theme_functions_ajax.php",
    "/includes/theme_functions_helper.php",
    "/includes/theme_template_main_functions.php",
    "/includes/theme_template_sidebar.php",
    "/includes/theme_template_scripts.php",
    "/includes/theme_functions_api.php",
    "/includes/theme_functions_job_sync.php",
);

foreach ($list_files as $file){
    require_once(TEMP_DIR .$file);
}

// var_dump data
if (!function_exists('dd')) {
    function dd()
    {
        echo '<pre>';
        array_map(function($x) {var_dump($x);}, func_get_args());
        echo '</pre>';
        die;
    }
}

// Set views blogs
function set_views($post_ID) {
    $key = 'views';
    $count = get_post_meta($post_ID, $key, true); //retrieves the count

    if($count == ''){ 

        $count = 0;

        delete_post_meta($post_ID, $key);

        add_post_meta($post_ID, $key, '0');

    } else{ 
        $count++;
        update_post_meta($post_ID, $key, $count);
    }
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function track_custom_blogs ($post_ID) {
    if ( !is_single() ) return;
    if ( empty ( $post_ID) ) {
        global $post;
        $post_ID = $post->ID;    
    }
    set_views($post_ID);
}
add_action( 'wp_head', 'track_custom_blogs');
?>