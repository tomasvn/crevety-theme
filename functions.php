<?php 

/**
 * WP ENQUE
 * 1. First Param in enque - name
 * 2. Second Param - src of the file
 * 3. Third Param - dependency
 * 4. Fourth Param - version
 * 5. Fifth Param - media (screen etc.), true or false if I want to include it in header or footer, false do not include into footer, true show it in header
*/

/**
 * ADD_ACTION
 * 1. Param string
 * 2. Param - call function
 * 3. Param - 
 * 4. Param -
*/

function addAll() {
    wp_enqueue_style('style', get_stylesheet_uri() );
    wp_enqueue_script('jq', get_template_directory_uri() . '/js/jquery.min.js', '', '', false);
    wp_enqueue_script('jq-input', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', '', '', true);
    wp_enqueue_script('sl', get_template_directory_uri() . '/js/slick.min.js', '', '', true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/js/aos.min.js', '', '', true);
    wp_enqueue_script('bs', get_template_directory_uri() . '/js/bootstrap.min.js', '', '', false);
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/script.js', '', '', true);
}

add_action('wp_enqueue_scripts', 'addAll');
