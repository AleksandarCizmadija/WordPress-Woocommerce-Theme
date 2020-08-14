<?php 
function load_css(){
    
    wp_register_style('FontAwesomeCSS', get_template_directory_uri() . '/CDN fontawesome-free/css/all.min.css', array(), 1.1, 'all');
    wp_enqueue_style('FontAwesomeCSS');
    
    wp_register_style('MagnificPopupCSS', get_template_directory_uri() . '/CDN Magnific-Popup/magnific-popup.css', array(), 1.1, 'all');
    wp_enqueue_style('MagnificPopupCSS');

    wp_register_style('stylesheet', get_template_directory_uri() . '/css/style.css', array(), 1.1, 'all');
    wp_enqueue_style('stylesheet');

}
add_action('wp_enqueue_scripts', 'load_css');


function load_js(){
    wp_enqueue_script('jquery');

    wp_register_script('FontAwesomeJS', get_template_directory_uri() . '/CDN fontawesome-free/js/all.min.js', array (), '1.1', true);
    wp_enqueue_script('FontAwesomeJS');

    wp_register_script('MagnificPopupJS', get_template_directory_uri() . '/CDN Magnific-Popup/jquery.magnific-popup.min.js', array (), '1.1', true);
    wp_enqueue_script('MagnificPopupJS');

    wp_register_script('main', get_template_directory_uri() . '/js/main.js', array (), '1.1', true);
    wp_enqueue_script('main');
    

}
add_action('wp_enqueue_scripts', 'load_js');


add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

add_image_size( 'xs-thumb', 75, 75, true );
add_image_size( 'sm-thumb', 300, 300, true );
add_image_size( 'md-thumb', 600, 300, true );
add_image_size( 'lg-thumb', 750, 750, true );

// menus
register_nav_menus( 
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )
);

# register sidebar

function my_sidebar(){
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page_sidebar',
            'before_title' => '<h4 class="widget-sidebar">',
            'after_title' => '</h4>'
            )
    );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog_sidebar',
            'before_title' => '<h4 class="widget-sidebar">',
            'after_title' => '</h4>'
            )
    );
}
add_action('widgets_init', 'my_sidebar');

function wpdocs_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// woocommerce
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );