<?php
    function law_theme_bootstrapping()
    {
        load_theme_textdomain('law');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails' );

    }

    add_action('after_setup_theme','law_theme_bootstrapping');

    function law_assets(){
        wp_enqueue_style('main-style-file', get_template_directory_uri().'/css/styles.css', null, time());
        wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/scripts.js', array("jquery"), time(), true );
        wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/releases/v6.3.0/js/all.js', array("jquery"), time(), true );
    }

    add_action('wp_enqueue_scripts', 'law_assets');

    function singlepost_sidebar(){
        register_sidebar(
            array(
                'name'           => __( 'right_sidebar', 'test' ),
                'id'             => 'post_sidebar',
                'description'    => __('post sidebar', 'test'),
                'before_widget'  => '<li id="%1$s" class="widget %2$s">',
                'after_widget'   => "</li>\n",
                'before_title'   => '<h2 class="widgettitle">',
                'after_title'    => "</h2>\n",
            )
        );
    }


    add_action('widgets_init', 'singlepost_sidebar');


?>