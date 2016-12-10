<?php

//

if (!function_exists('glasseye_setup')):

    function glasseye_setup() {
//let WordPress handle title tags
        add_theme_support('title-tag');
    }

endif;
add_action('after_setup_theme', 'glasseye_setup');

/* --- Register menus --- */

function register_glasseye_menus() {
    register_nav_menus(
            array(
                'primary' => __('Primary Menu'),
                'footer' => __('Footer Menu')
    ));
}

add_action('init', 'register_glasseye_menus');
/* --- add stylesheets --- */

function glasseye_scripts() {

//enqueue stylesheet
    wp_enqueue_style('glasseye_styles', get_stylesheet_uri());
//enqueue google fonts
    wp_enqueue_style('glasseye_google_fonts', "https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700");
}

add_action('wp_enqueue_scripts', 'glasseye_scripts');

/* --- Register widget area --- */

function glasseye_widgets_init() {
    register_sidebar(array(
        'name' => __('Main Sidebar', 'wptheme'),
        'id' => 'main-sidebar',
        'description' => __('Widgets added here will apear in all pages using the two column template.', 'wptheme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'glasseye_widgets_init');

