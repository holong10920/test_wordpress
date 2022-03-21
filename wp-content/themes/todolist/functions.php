<?php
    function todolist_theme_support(){
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'todolist_theme_support');

    function todolist_menus(){
        $locations = array(
            'primary' => "Desktop Primary Left Sidebar",
            'footer' => "Footer Menu Items"
        );

        register_nav_menus($locations);
    }
    add_action('init', 'todolist_menus');

    function todolist_register_styles(){
        $version = wp_get_theme()->get('Version');

        wp_enqueue_style('todolist-style', get_template_directory_uri() . '/style.css', array('todolist-bootstrap'), $version, 'all');
        wp_enqueue_style('todolist-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2', 'all');
    }
    add_action('wp_enqueue_scripts', 'todolist_register_styles');


    function todolist_register_scripts(){
        wp_enqueue_script('todolist-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array(), '5.0.2', true);
        wp_enqueue_script('todolist-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array(), '2.9.2', true);
        wp_enqueue_script('todolist-ionicons', 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js', array(), '5.5.2', true);
        wp_enqueue_script('todolist-ionicons-esm', 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js', array(), '5.5.2', true);
        wp_enqueue_script('todolist-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
    }
    add_action('wp_enqueue_scripts', 'todolist_register_scripts');

?>