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

add_action( 'after_setup_theme', 'theme_support');
function theme_support(){
   register_nav_menu('menu_main_burger', "Меню в бургере" );
   register_nav_menu('menu_main_footer', "Меню в подвале" );
}
// add_action( 'after_setup_theme', 'theme_support');
// function theme_support(){
// }

// ----------------------Carbon_Fields----------------------------
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
   // админпанель->настройки сайта
    Container::make( 'theme_options', 'Настройки сайта' )
        ->add_tab('Общие настройки', [
            Field::make( 'text', 'name_company', 'Наша организация' ),
            Field::make( 'text', 'inn', 'Наш ИНН' ),
            Field::make( 'text', 'sity', 'Город' ),
            Field::make( 'text', 'address', 'Адрес' ),
            Field::make( 'text', 'work_hours_text', 'Часы работы текст' ),
            Field::make( 'text', 'work_hours_1', 'Часы работы в будни' ),
            Field::make( 'text', 'work_hours_2', 'Часы работы в выходные' ),
            
        ] )
        ->add_tab('Мы в соцсетях', [
         Field::make( 'image', 'icon_vk_light', 'Иконка вк светлая' ),
         Field::make( 'image', 'icon_vk_dark', 'Иконка вк темная' ),
         Field::make( 'text', 'link_vk', 'Ссылка вк' )->set_help_text('Вставить в поле ссылку' ),
         Field::make( 'image', 'icon_insta_light', 'Иконка инстаграм светлая' ),
         Field::make( 'image', 'icon_insta_dark', 'Иконка инстаграм темная' ),
         Field::make( 'text', 'link_insta', 'Ссылка инстаграм' )->set_help_text('Вставить в поле ссылку' ),
     ] );
   //   post_meta админпанель->страницы->главная(id=5)
     Container::make( 'post_meta', 'Дополнительные поля' )
         ->show_on_page(5)
         ->add_tab('Первый экран', [
             Field::make( 'image', 'hero_img', 'Изображение на первом экране'),
             Field::make( 'text', 'top_info', 'Надзаголовок' )->set_width(50),
             Field::make( 'text', 'top_title', 'Заголовок' )->set_width(50),
             
             
         ] );
}


       




// ->set_help_text('Настройки полей находятся в файле functions.php, после комментария Carbon_Fields' )






