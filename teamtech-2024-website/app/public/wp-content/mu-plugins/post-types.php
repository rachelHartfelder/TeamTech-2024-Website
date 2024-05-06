<?php 
    function post_types() { 
        // creates "our product" posts
        register_post_type('product', array(
            'public' => true,
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Our Product Page',
                'add_new_item' => 'Add New Page',
                'edit_item' => 'Edit Page',
                'all_items' => 'All Pages',
                'singular_name' => 'Page'
            ),
            'menu_icon' => 'dashicons-info'
        ));

        // creates "partner with us" posts
        register_post_type('partner', array( 
            'public' => true,
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Partner Page',
                'add_new_item' => 'Add New Page',
                'edit_item' => 'Edit Page',
                'all_items' => 'All Pages',
                'singular_name' => 'Page'
            ),
            'menu_icon' => 'dashicons-businesswoman'
        ));
        
        // creates "about" posts
        register_post_type('about', array(
            'public' => true,
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'About Page',
                'add_new_item' => 'Add New Page',
                'edit_item' => 'Edit Page',
                'all_items' => 'All Pages',
                'singular_name' => 'Page'
            ),
            'menu_icon' => 'dashicons-email'
        ));
    } 

    add_action('init', 'post_types');
?>