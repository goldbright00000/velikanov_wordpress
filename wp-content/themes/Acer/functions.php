<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/* enqueue styles and scripts */
function jpen_enqueue_assets()
{

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    /* theme's primary style.css file */
    wp_enqueue_style('main', get_stylesheet_uri());
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');

    /* template's primary css file */

    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');

    /* boostrap resources from theme files */

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);

    /*conditional resources for IE 9 */
    wp_enqueue_script('simple-blog-html5', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', array(), '3.7.0');
    wp_script_add_data('simple-blog-html5', 'conditional', 'lt IE 9');
    wp_enqueue_script('simple-blog-respondjs', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', array(), '1.4.2');
    wp_script_add_data('simple-blog-respondjs', 'conditional', 'lt IE 9');
}
add_action('wp_enqueue_scripts', 'jpen_enqueue_assets');

/* add theme menu area */
register_nav_menus(array(
    'primary' => 'Primary Menu',
));

/* add theme supports */
add_theme_support('post-thumbnails');

/* add img-responsive class to all images */
function jpen_add_responsive_class($content)
{

    $content = mb_convert_encoding($content, 'HTML-ENTITIES', "UTF-8");
    $document = new DOMDocument();
    libxml_use_internal_errors(true);
    $document->loadHTML(utf8_decode($content));

    $imgs = $document->getElementsByTagName('img');
    foreach ($imgs as $img) {
        $img->setAttribute('class', 'img-responsive');
    }

    $html = $document->saveHTML();
    return $html;
}
add_filter('the_content', 'jpen_add_responsive_class');

/* register widget areas */
function jpen_sidebar_widget_area()
{
    register_sidebar(array(
        'name' => 'Sidebar Widget Area',
        'id' => 'jpen-sidebar-widgets',
        'before_widget' => '<div class="well">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'jpen_sidebar_widget_area');
