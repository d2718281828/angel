<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}

function boldgroup_shortcode($atts = [], $content = null, $tag = '') {
	$m = "<div class='boldgroup'>";
	$m.= $content;
	$m.= "<div>";
	return $m;
}
function wporg_shortcodes_init()
{
    add_shortcode('boldgroup', 'boldgroup_shortcode');
}
 
add_action('init', 'wporg_shortcodes_init');
