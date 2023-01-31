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

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

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

function parlamenttheme_add_woocommerce_support() {
   add_theme_support( 'woocommerce', array(
       'thumbnail_image_width' => 150,
       'single_image_width'    => 300,

       'product_grid'          => array(
           'default_rows'    => 3,
           'min_rows'        => 2,
           'max_rows'        => 8,
           'default_columns' => 4,
           'min_columns'     => 2,
           'max_columns'     => 5,
       ),
   ) );
}

add_action( 'after_setup_theme', 'parlamenttheme_add_woocommerce_support' );



