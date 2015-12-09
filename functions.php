<?php
/*
All the functions are in the PHP pages in the func/ folder.
*/

/*if( !is_admin()){ 
    $url = 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'; 
    $test_url = @fopen($url,'r'); 
    if($test_url !== false) { 
        function load_external_jQuery() {
            wp_deregister_script('jquery'); 
            wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'); 
            wp_enqueue_script('jquery'); 
        }
        add_action('wp_enqueue_scripts', 'load_external_jQuery'); 
    } else {
        function load_local_jQuery() {
            wp_deregister_script('jquery'); 
            wp_register_script('jquery', bloginfo('template_url').'/js/jquery-1.11.1.min.js', __FILE__, false, '1.11.1', true); 
            wp_enqueue_script('jquery'); 
        }
    add_action('wp_enqueue_scripts', 'load_local_jQuery'); 
    }
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' ); */

require_once locate_template('/func/cleanup.php');
require_once locate_template('/func/setup.php');
require_once locate_template('/func/enqueues.php');
require_once locate_template('/func/navbar.php');
require_once locate_template('/func/widgets.php');
require_once locate_template('/func/feedback.php');
require_once locate_template('/func/slider.php'); 
require_once locate_template('/func/customposttypes.php');



?>
