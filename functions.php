<?php

require_once __DIR__ . "/include/customizer.php";

/* Başlık Desteği */
add_theme_support( 'title-tag' );

/* Özel Logo Desteği */
add_theme_support( 'custom-logo', array(
    'height' => 40,
    'width'  => 160,
) );

/* Stiller ve Scriptler */
function nanoScripts() {
    wp_enqueue_script("fontawesome","https://use.fontawesome.com/releases/v5.15.3/js/all.js");
    wp_enqueue_style("Google-Fonts-1","https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic");
    wp_enqueue_style("Google-Fonts-2","https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800");
    wp_enqueue_script("Bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js");
    wp_enqueue_script("ThemeScript",get_template_directory_uri()."/assets/js/scripts.js");
    wp_enqueue_style( 'theme-style', get_template_directory_uri()."/assets/css/styles.css" );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'custom-style', get_template_directory_uri()."/custom.css" );
    wp_enqueue_script("Form","https://cdn.startbootstrap.com/sb-forms-latest.js");
}
add_action( 'wp_enqueue_scripts', 'nanoScripts' );

/* Sayfa Özet Desteği */
add_post_type_support( 'page', 'excerpt' );

/* Görsel Boyutları */
add_image_size("page-header","1900", "1267");

/* Öne Çıkan Görsel Desteği */
add_theme_support( 'post-thumbnails' );

/* Menü Destekleri */
register_nav_menus(
    array(
        'ana-menu' => __( 'Ana Menü',"nanomedya" )
    )
);