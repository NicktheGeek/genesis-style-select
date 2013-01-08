<?php
/*
Plugin Name: Genesis Style Select
Plugin URI: http://designsby.nickgeek.com/2010/06/13/genesis-style-select/
Description: Genesis Style Select is allows users to select which style sheet they will use in any Genesis Child theme by StudioPress.
Version: 1.0
Author: Nick Croft
Author URI: http://DesignsBy.NickGeek.com/
*/



add_action( 'genesis_init', 'gsselect_init', 15 );

/** Loads required files when needed */
function gsselect_init() {

    /** Load textdomain for translation */
    load_plugin_textdomain( 'gsselect', false, basename( dirname( __FILE__ ) ) . '/languages/' );

    if ( is_admin () ) 
        require_once( dirname( __FILE__ ) . '/admin.php' );
    
    // Changes the style sheet per the selection in the theme settings and loads style.css if selected style sheet is not available
    add_filter('stylesheet_uri', 'child_stylesheet_uri', 10, 2);
}

function child_stylesheet_uri($stylesheet, $dir) {
    $style = genesis_get_option('style_selection');
    if ( !$style ) return $stylesheet;
    if (!file_exists(CHILD_DIR . '/' . $style)) return $stylesheet;
    
    return $dir . '/' . $style;
}