<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{

	wp_enqueue_style('astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css');

}

add_action('wp_enqueue_scripts', 'child_enqueue_styles');

function child_enqueue_scripts()
{

	wp_enqueue_script('astra-child-theme-js', get_stylesheet_directory_uri() . '/main.js');

}

add_action('wp_enqueue_scripts', 'child_enqueue_scripts');

function wpb_hook_javascript()
{
	if (is_page('10')) {
		?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
		<?php
	}
}
add_action('wp_footer', 'wpb_hook_javascript');
?>