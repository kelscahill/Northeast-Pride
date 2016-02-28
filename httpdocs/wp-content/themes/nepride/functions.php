<?php
function theme_enqueue_styles() {

    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


if ( !is_admin() ) { // instruction to only load if it is not the admin area
   // register your script location, dependencies and version
   wp_register_script('custom_script',
       get_bloginfo('stylesheet_directory') . '/js/all.js',
       array('jquery'),
       '1.0' );

   // enqueue the script
   wp_enqueue_script('custom_script');
}

?>