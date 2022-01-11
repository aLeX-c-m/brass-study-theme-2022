<?php 


function brass_register_scripts(){
        wp_enqueue_script('brass-font-script', 'http://use.edgefonts.net/source-sans-pro:n2:default.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'brass_register_scripts');

function brass_register_styles(){
    wp_enqueue_style('brass-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'brass_register_styles');


function brass_menus(){
    $locations = array(
        'primary' => 'Primary Top Menu'
    );

    register_nav_menus($locations);
}

 add_action('init', 'brass_menus');

class Walker_Nav_Primary extends Brass_Nav_Walker {

    function start_lvl(&$output, $depth = 0, $args = array()) {
       $indent = string_repeat("\t", $depth);
       if($depth > 0) {
        $output .= "<ul class='dropdown-submenu'>";
    } else {
        global $description;
        $output .= "<ul class='dropdown'>" . $description;
    }
       
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : "";
       
    
        $li_attributes = "";
        $class_names = $value = "";

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
        $classes[] = 'menu-item-' .$item->ID;

        if($depth && $args->walker->has_children){
            $classes[] = 'dropdown-submenu';
        }


        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = 'class="' .esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' .$item->ID, $item, $args);
        $id = strlen($id) ? 'id="' .esc_attr($id) . '"' : '';

        $output .= $indent . '<li' .$id .$value .$class_names .$li_attributes . '>';
       
        $attributes = !empty($item->attr_title) ? 'title="' . esc_attr($item->attr_title) .'"' : '';
        $attributes .= !empty($item->$target) ? 'target="' . esc_attr($item->$target) .'"' : '';
        $attributes .= !empty($item->xfn) ? 'rel="' . esc_attr($item->xfn) .'"' : '';  
        $attributes .= !empty($item->url) ? 'href="' . esc_attr($item->url) .'"' : '';
        
        $attributes .= !($args->walker->has_children) ?  'class="nav-tag"' : '';

        $item_output = $args->before;
        $item_output .= '<a class=\"nav-tag\" ' .attributes . '>';
        $item_output .= $args->link_before .apply_filters('the_title', $item->$title, $item->ID) .$args->link_after;
        $item_output .= ( $depth = 0 && $args->walker->has_children) ? '' : '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
        
		
    }

    function end_el() {
        $output .= "</li>";	
    }

    function end_lvl() {
       $output .= "</ul>";
    }

}

?>