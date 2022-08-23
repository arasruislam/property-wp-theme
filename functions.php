<?php

/**
 * Theme Support 
 */
function property_theme_support()
{;

    /** tag-title **/
    add_theme_support('title-tag');

    /** post thumbnail **/
    add_theme_support('post-thumbnails', ['post', 'properties', 'customers', 'abouts', 'agents']);

    /** HTML5 support **/
    add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script']);

    /** Textdomain support **/
    load_theme_textdomain('my-theme', get_template_directory() . '/languages');

    /** Add Custom Logo **/
    add_theme_support('custom-logo', [
        'header-text'          => array('site-title', 'site-description'),
        'height'               => 100,
        'width'                => 300,
        'flex-height'          => true,
        'flex-width'           => true,
    ]);
}
add_action('after_setup_theme', 'property_theme_support');

/**
 * Register Menus
 */
function add_nav_menus()
{
    register_nav_menus(
        [
            'primary' => 'Header Menu',
            'footer' => 'Footer Menu',
        ]
    );
}
add_action('init', 'add_nav_menus');

/**
 * Add Style & Script 
 */
function property_script()
{
    wp_enqueue_style('custom-style', get_stylesheet_uri() . './style.css');

    // style
    wp_enqueue_style('icomoon-style', get_template_directory_uri() . './fonts/icomoon/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('flaticon', get_template_directory_uri() . './fonts/flaticon/font/flaticon.css', array(), '1.0.0', 'all');
    wp_enqueue_style('tiny-slider', get_template_directory_uri() . './css/tiny-slider.css', array(), '1.0.0', 'all');
    wp_enqueue_style('aos', get_template_directory_uri() . './css/aos.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . './css/style.css', array(), '1.0.0', 'all');

    // Script
    wp_enqueue_script('bootstrap', get_template_directory_uri() . './js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('tiny-slider', get_template_directory_uri() . './js/tiny-slider.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('aos', get_template_directory_uri() . './js/aos.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('navbar', get_template_directory_uri() . './js/navbar.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('counter', get_template_directory_uri() . './js/counter.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('custom', get_template_directory_uri() . './js/custom.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'property_script');

/**
 * Acf Option Page Setup
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        [
            'page_title'    => __('Theme General Settings', 'property'),
            'menu_title'    => __('Theme Settings', 'property'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ]
    );

    /** Footer **/
    acf_add_options_sub_page(
        [
            'page_title'    => __('Theme Footer Settings', 'property'),
            'menu_title'    => __('Footer', 'property'),
            'parent_slug'   => 'theme-general-settings',
        ]
    );

    /** social Links **/
    acf_add_options_sub_page(
        [
            'page_title'    => __('Theme Social Settings', 'property'),
            'menu_title'    => __('Social Links', 'property'),
            'parent_slug'   => 'theme-general-settings',
        ]
    );

    /** Slider/Hero **/
    acf_add_options_sub_page(
        [
            'page_title'    => __('Theme Slider Settings', 'property'),
            'menu_title'    => __('Slider', 'property'),
            'parent_slug'   => 'theme-general-settings',
        ]
    );

    /** Image Gallery **/
    acf_add_options_sub_page(
        [
            'page_title'    => __('Theme Image_Gallery Settings', 'property'),
            'menu_title'    => __('Image Gallery', 'property'),
            'parent_slug'   => 'theme-general-settings',
        ]
    );

    /** Image Gallery **/
    acf_add_options_sub_page(
        [
            'page_title'    => __('Theme Counter Settings', 'property'),
            'menu_title'    => __('Counter', 'property'),
            'parent_slug'   => 'theme-general-settings',
        ]
    );

    /** Address **/
    acf_add_options_sub_page(
        [
            'page_title'    => __('Theme Address Settings', 'property'),
            'menu_title'    => __('Address', 'property'),
            'parent_slug'   => 'theme-general-settings',
        ]
    );
}

/**
 * Custom Post Setup
 */

function property_custom_post()
{
    /** For Properties **/
    // $labels = array(
    //     'name'                => __('Properties', 'Post Type General Name', 'property'),
    //     'singular_name'       => __('Property', 'Post Type Singular Name', 'property'),
    //     'menu_name'           => __('Properties', 'property'),
    //     'parent_item_colon'   => __('Parent Property', 'property'),
    //     'all_items'           => __('All Properties', 'property'),
    //     'view_item'           => __('View Property', 'property'),
    //     'add_new_item'        => __('Add New Property', 'property'),
    //     'add_new'             => __('Add New', 'property'),
    //     'edit_item'           => __('Edit Property', 'property'),
    //     'update_item'         => __('Update Property', 'property'),
    //     'search_items'        => __('Search Property', 'property'),
    //     'not_found'           => __('Not Found', 'property'),
    //     'not_found_in_trash'  => __('Not found in Trash', 'property'),
    // );
    // $args = array(
    //     'labels'             => $labels,
    //     'public'             => true,
    //     'publicly_queryable' => true,
    //     'show_ui'            => true,
    //     'show_in_menu'       => true,
    //     'query_var'          => true,
    //     'rewrite'            => array('slug' => 'm-property'),
    //     'capability_type'    => 'post',
    //     'has_archive'        => true,
    //     'hierarchical'       => false,
    //     'menu_position'      => null,
    //     'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    // );

    // register_post_type('Properties', $args);

    /** For Services **/
    $labels = array(
        'name'                => __('Services', 'Post Type General Name', 'property'),
        'singular_name'       => __('Service', 'Post Type Singular Name', 'property'),
        'menu_name'           => __('Services', 'property'),
        'parent_item_colon'   => __('Parent Service', 'property'),
        'all_items'           => __('All Services', 'property'),
        'view_item'           => __('View Service', 'property'),
        'add_new_item'        => __('Add New Service', 'property'),
        'add_new'             => __('Add New', 'property'),
        'edit_item'           => __('Edit Service', 'property'),
        'update_item'         => __('Update Service', 'property'),
        'search_items'        => __('Search Service', 'property'),
        'not_found'           => __('Not Found', 'property'),
        'not_found_in_trash'  => __('Not found in Trash', 'property'),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'm-service'),
        'menu_icon'          => 'dashicons-businessperson',
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => ['title', 'editor', 'excerpt'],
        'show_in_rest'       => true,

    );

    register_post_type('Services', $args);

    /** Customer Custom Post **/
    $labels = array(
        'name'                => __('Customers', 'Post Type General Name', 'property'),
        'singular_name'       => __('Customer', 'Post Type Singular Name', 'property'),
        'menu_name'           => __('Customers', 'property'),
        'parent_item_colon'   => __('Parent Customer', 'property'),
        'all_items'           => __('All Customers', 'property'),
        'view_item'           => __('View Customer', 'property'),
        'add_new_item'        => __('Add New Customer', 'property'),
        'add_new'             => __('Add New', 'property'),
        'edit_item'           => __('Edit Customer', 'property'),
        'update_item'         => __('Update Customer', 'property'),
        'search_items'        => __('Search Customer', 'property'),
        'not_found'           => __('Not Found', 'property'),
        'not_found_in_trash'  => __('Not found in Trash', 'property'),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'm-customer'),
        'menu_icon'          => 'dashicons-buddicons-buddypress-logo',
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => ['title', 'thumbnail'],
        // 'show_in_rest'       => true,

    );

    register_post_type('Customers', $args);

    /** About Custom Post (Legit) **/
    $labels = array(
        'name'                => __('Abouts', 'Post Type General Name', 'property'),
        'singular_name'       => __('About', 'Post Type Singular Name', 'property'),
        'menu_name'           => __('Abouts', 'property'),
        'parent_item_colon'   => __('Parent About ', 'property'),
        'all_items'           => __('All Abouts', 'property'),
        'view_item'           => __('View About ', 'property'),
        'add_new_item'        => __('Add New About ', 'property'),
        'add_new'             => __('Add New', 'property'),
        'edit_item'           => __('Edit About ', 'property'),
        'update_item'         => __('Update About ', 'property'),
        'search_items'        => __('Search About ', 'property'),
        'not_found'           => __('Not Found', 'property'),
        'not_found_in_trash'  => __('Not found in Trash', 'property'),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'a-About'),
        'menu_icon'          => 'dashicons-buddicons-buddypress-logo',
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => ['thumbnail'],
        // 'show_in_rest'       => true,

    );

    register_post_type('Abouts', $args);

    /** Agent Custom Post (Legit) **/
    $labels = array(
        'name'                => __('Agents', 'Post Type General Name', 'property'),
        'singular_name'       => __('Agent', 'Post Type Singular Name', 'property'),
        'menu_name'           => __('Agents', 'property'),
        'parent_item_colon'   => __('Parent Agent ', 'property'),
        'all_items'           => __('All Agents', 'property'),
        'view_item'           => __('View Agent ', 'property'),
        'add_new_item'        => __('Add New Agent ', 'property'),
        'add_new'             => __('Add New', 'property'),
        'edit_item'           => __('Edit Agent ', 'property'),
        'update_item'         => __('Update Agent ', 'property'),
        'search_items'        => __('Search Agent ', 'property'),
        'not_found'           => __('Not Found', 'property'),
        'not_found_in_trash'  => __('Not found in Trash', 'property'),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'n-Agent'),
        'menu_icon'          => 'dashicons-buddicons-buddypress-logo',
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => ['title', 'thumbnail'],
        // 'show_in_rest'       => true,

    );

    register_post_type('Agents', $args);
}
add_action('init', 'property_custom_post');