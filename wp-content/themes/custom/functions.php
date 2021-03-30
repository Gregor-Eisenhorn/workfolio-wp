<?

function enqueue_styles() {
	wp_enqueue_style( 'custom-style', '/wp-content/themes/custom/style.css', array(), time());
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}