<?php
add_filter('show_admin_bar', '__return_false');

remove_action('wp_head',             'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles',     'print_emoji_styles' );
remove_action('admin_print_styles',  'print_emoji_styles' );

remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate

add_action( 'wp_enqueue_scripts', 'site_scripts' );
function site_scripts(){
   $version = '0.0.0.0';
   wp_dequeue_style( 'wp_block_library' );
   wp_dequeue_style( 'wp-block-library-theme' );
   wp_enqueue_style('main-style', get_stylesheet_uri(  ), [], $version);
   // wp_enqueue_script('seamlesscrollpolifill', 'https://cdn.jsdelivr.net/npm/seamless-scroll-polyfill@latest/lib/bundle.min.js', [], $version, true );
   wp_enqueue_script('burgerMenu', get_template_directory_uri() .'/assets/js/burgerMenu.js', [], $version, true );
   wp_enqueue_script('smoothScroll', get_template_directory_uri() .'/assets/js/smoothScroll.js', [], $version, true );
   wp_enqueue_script('animationHeader', get_template_directory_uri() .'/assets/js/animationHeader.js', [], $version, true );
   wp_enqueue_script('subnavAccordion', get_template_directory_uri() .'/assets/js/subnavAccordion.js', [], $version, true );
}



