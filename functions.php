<?php 

function brass_register_styles(){
    wp_enqueue_style('brass-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'brass_register_styles');

function brass_register_scripts(){
        wp_enqueue_script('brass-font-script', 'http://use.edgefonts.net/source-sans-pro:n2:default.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'brass_register_scripts');

// function brass_register_menus(){
    
//     $locations = array(
//         'Primary' => "Top Menu",
//         'FooterMenus' => 'Footer Menu Links'
//     )
    
//    // register_nav_menus($locations)
// }

// add_action('init', 'brass_register_menus');



?>



