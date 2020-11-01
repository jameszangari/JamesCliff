<?php
/**
 * Set Custom WP Login Logo
 *
 * @link https://www.wpexplorer.com/limit-wordpress-search/
 * @return void
 */
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/dist/images/james_cliff_logo_2020.png);
        margin: auto;
        height: 150px;
        width: 150px;
        background-size: 150px 150px;
		background-repeat: no-repeat;
        border-radius: 100px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/*
 * Enable support for Post Thumbnails on posts and pages.
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
*/
function add_post_thumbnails_support() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_post_thumbnails_support');

/*
 * Enable support for Page excerpts.
 * @link https://www.wpbeginner.com/plugins/add-excerpts-to-your-pages-in-wordpress/
*/
add_post_type_support( 'page', 'excerpt' );

/**
 * Include any styles into the site the proper way
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */
function include_css_files() {
    // Example of including a style local to your theme root
    wp_enqueue_style('cliff-css', get_template_directory_uri() . '/dist/css/cliff-style.css');
    
    // External font links
    wp_enqueue_style('Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
    wp_enqueue_style('Montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');
    wp_enqueue_style('Overpass', 'https://fonts.googleapis.com/css2?family=Overpass:wght@800&display=swap');
    
    // Slick Carousel
    wp_enqueue_style('slick-carousel-theme', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick-theme.css');
    wp_enqueue_style('slick-carousel', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick.css');
}

// When WP performs this action, call our function
add_action('wp_enqueue_scripts', 'include_css_files');


/**
 * Include any scripts into the site the proper way
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 */
function include_js_files() {
    wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', [], null, true);
    
    // Font Awesome icons
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/080c06f1d6.js');
    
    // Slick Carousel
    wp_enqueue_script('slick-carousel-js', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick.js', ['jquery'], null, true);
    wp_enqueue_script('slick-init-js', get_template_directory_uri() . '/dist/scripts/slick.init.js', ['jquery'], null, true);

    // CUSTOM JS
    wp_enqueue_script('cliff-js', get_template_directory_uri() . '/dist/scripts/scripts.js', ['jquery'], null, true);
}

// When WP performs this action, call our function
add_action('wp_enqueue_scripts', 'include_js_files');

/**
 * Register the menus on my site
 *
 * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
 * @return void
 */
function register_theme_navigation() {
    register_nav_menus([
        'primary_menu' => 'Primary Menu',
    ]);
}

add_action('after_setup_theme', 'register_theme_navigation');