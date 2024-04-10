<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage adxp
 * @since ADXP 1.0
 */

// This theme requires WordPress 5.3 or later.
if (version_compare($GLOBALS['wp_version'], '5.3', '<')) {
	require get_template_directory() . '/inc/back-compat.php';
}

if (!function_exists('adxp_setup')) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since ADXP 1.0
	 *
	 * @return void
	 */
	function adxp_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ADXP, use a find and replace
		 * to change 'adxp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('adxp', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support('title-tag');

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(1568, 9999);

		register_nav_menus(
			array(
				'primary' => esc_html__('Primary menu', 'adxp'),
				'footer'  => esc_html__('Secondary menu', 'adxp'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for Block Styles.
		add_theme_support('wp-block-styles');

		// Add support for full and wide align images.
		add_theme_support('align-wide');

		// Add support for editor styles.
		add_theme_support('editor-styles');
		$background_color = get_theme_mod('background_color', 'D1E4DD');
		if (127 > adxp_Custom_Colors::get_relative_luminance_from_hex($background_color)) {
			add_theme_support('dark-editor-style');
		}

		$editor_stylesheet_path = './assets/css/style-editor.css';

		// Note, the is_IE global variable is defined by WordPress and is used
		// to detect if the current browser is internet explorer.
		global $is_IE;
		if ($is_IE) {
			$editor_stylesheet_path = './assets/css/ie-editor.css';
		}

		// Enqueue editor styles.
		add_editor_style($editor_stylesheet_path);

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__('Extra small', 'adxp'),
					'shortName' => esc_html_x('XS', 'Font size', 'adxp'),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__('Small', 'adxp'),
					'shortName' => esc_html_x('S', 'Font size', 'adxp'),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__('Normal', 'adxp'),
					'shortName' => esc_html_x('M', 'Font size', 'adxp'),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__('Large', 'adxp'),
					'shortName' => esc_html_x('L', 'Font size', 'adxp'),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__('Extra large', 'adxp'),
					'shortName' => esc_html_x('XL', 'Font size', 'adxp'),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__('Huge', 'adxp'),
					'shortName' => esc_html_x('XXL', 'Font size', 'adxp'),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__('Gigantic', 'adxp'),
					'shortName' => esc_html_x('XXXL', 'Font size', 'adxp'),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'd1e4dd',
			)
		);

		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__('Black', 'adxp'),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__('Dark gray', 'adxp'),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__('Gray', 'adxp'),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__('Green', 'adxp'),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__('Blue', 'adxp'),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__('Purple', 'adxp'),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__('Red', 'adxp'),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__('Orange', 'adxp'),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__('Yellow', 'adxp'),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__('White', 'adxp'),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__('Purple to yellow', 'adxp'),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__('Yellow to purple', 'adxp'),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__('Green to yellow', 'adxp'),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__('Yellow to green', 'adxp'),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__('Red to yellow', 'adxp'),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__('Yellow to red', 'adxp'),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__('Purple to red', 'adxp'),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__('Red to purple', 'adxp'),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'red-to-purple',
				),
			)
		);

		/*
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
		*/
		if (is_customize_preview()) {
			require get_template_directory() . '/inc/starter-content.php';
			add_theme_support('starter-content', adxp_get_starter_content());
		}

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

		// Add support for custom line height controls.
		add_theme_support('custom-line-height');

		// Add support for experimental link color control.
		add_theme_support('experimental-link-color');

		// Add support for experimental cover block spacing.
		add_theme_support('custom-spacing');

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support('custom-units');

		// Remove feed icon link from legacy RSS widget.
		add_filter('rss_widget_feed_link', '__return_empty_string');
	}
}
add_action('after_setup_theme', 'adxp_setup');

/**
 * Register widget area.
 *
 * @since ADXP 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function adxp_widgets_init()
{

	register_sidebar(
		array(
			'name'          => esc_html__('Footer', 'adxp'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'adxp'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'adxp_widgets_init');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since ADXP 1.0
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function adxp_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('adxp_content_width', 750);
}
add_action('after_setup_theme', 'adxp_content_width', 0);

/**
 * Enqueue scripts and styles.
 *
 * @since ADXP 1.0
 *
 * @return void
 */
function adxp_scripts()
{
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts;
	if ($is_IE) {
		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
		wp_enqueue_style('twenty-twenty-one-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get('Version'));
	} else {
		// If not IE, use the standard stylesheet.
		wp_enqueue_style('twenty-twenty-one-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
	}

	// RTL styles.
	wp_style_add_data('twenty-twenty-one-style', 'rtl', 'replace');

	// Print styles.
	wp_enqueue_style('twenty-twenty-one-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get('Version'), 'print');

	// Threaded comment reply styles.
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	// Register the IE11 polyfill file.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills-asset',
		get_template_directory_uri() . '/assets/js/polyfills.js',
		array(),
		wp_get_theme()->get('Version'),
		true
	);

	// Register the IE11 polyfill loader.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills',
		null,
		array(),
		wp_get_theme()->get('Version'),
		true
	);
	wp_add_inline_script(
		'twenty-twenty-one-ie11-polyfills',
		wp_get_script_polyfill(
			$wp_scripts,
			array(
				'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'twenty-twenty-one-ie11-polyfills-asset',
			)
		)
	);

	// Main navigation scripts.
	if (has_nav_menu('primary')) {
		wp_enqueue_script(
			'twenty-twenty-one-primary-navigation-script',
			get_template_directory_uri() . '/assets/js/primary-navigation.js',
			array('twenty-twenty-one-ie11-polyfills'),
			wp_get_theme()->get('Version'),
			true
		);
	}

	// Responsive embeds script.
	wp_enqueue_script(
		'twenty-twenty-one-responsive-embeds-script',
		get_template_directory_uri() . '/assets/js/responsive-embeds.js',
		array('twenty-twenty-one-ie11-polyfills'),
		wp_get_theme()->get('Version'),
		true
	);
}
add_action('wp_enqueue_scripts', 'adxp_scripts');

/**
 * Enqueue block editor script.
 *
 * @since ADXP 1.0
 *
 * @return void
 */
function adxp_block_editor_script()
{

	wp_enqueue_script('adxp-editor', get_theme_file_uri('/assets/js/editor.js'), array('wp-blocks', 'wp-dom'), wp_get_theme()->get('Version'), true);
}

add_action('enqueue_block_editor_assets', 'adxp_block_editor_script');

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @since ADXP 1.0
 *
 * @link https://git.io/vWdr2
 */
function adxp_skip_link_focus_fix()
{

	// If SCRIPT_DEBUG is defined and true, print the unminified file.
	if (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) {
		echo '<script>';
		include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
		echo '</script>';
	} else {
		// The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
?>
		<script>
			/(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", (function() {
				var t, e = location.hash.substring(1);
				/^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
			}), !1);
		</script>
	<?php
	}
}
add_action('wp_print_footer_scripts', 'adxp_skip_link_focus_fix');

/**
 * Enqueue non-latin language styles.
 *
 * @since ADXP 1.0
 *
 * @return void
 */
function adxp_non_latin_languages()
{
	$custom_css = adxp_get_non_latin_css('front-end');

	if ($custom_css) {
		wp_add_inline_style('twenty-twenty-one-style', $custom_css);
	}
}
add_action('wp_enqueue_scripts', 'adxp_non_latin_languages');

// SVG Icons class.
require get_template_directory() . '/classes/class-twenty-twenty-one-svg-icons.php';

// Custom color classes.
require get_template_directory() . '/classes/class-twenty-twenty-one-custom-colors.php';
new adxp_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-twenty-twenty-one-customize.php';
new adxp_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-twenty-twenty-one-dark-mode.php';
new adxp_Dark_Mode();

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since ADXP 1.0
 *
 * @return void
 */
function adxp_customize_preview_init()
{
	wp_enqueue_script(
		'adxp-customize-helpers',
		get_theme_file_uri('/assets/js/customize-helpers.js'),
		array(),
		wp_get_theme()->get('Version'),
		true
	);

	wp_enqueue_script(
		'adxp-customize-preview',
		get_theme_file_uri('/assets/js/customize-preview.js'),
		array('customize-preview', 'customize-selective-refresh', 'jquery', 'adxp-customize-helpers'),
		wp_get_theme()->get('Version'),
		true
	);
}
add_action('customize_preview_init', 'adxp_customize_preview_init');

/**
 * Enqueue scripts for the customizer.
 *
 * @since ADXP 1.0
 *
 * @return void
 */
function adxp_customize_controls_enqueue_scripts()
{

	wp_enqueue_script(
		'adxp-customize-helpers',
		get_theme_file_uri('/assets/js/customize-helpers.js'),
		array(),
		wp_get_theme()->get('Version'),
		true
	);
}
add_action('customize_controls_enqueue_scripts', 'adxp_customize_controls_enqueue_scripts');

/**
 * Calculate classes for the main <html> element.
 *
 * @since ADXP 1.0
 *
 * @return void
 */
function adxp_the_html_classes()
{
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * @since ADXP 1.0
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters('adxp_html_classes', '');
	if (!$classes) {
		return;
	}
	echo 'class="' . esc_attr($classes) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since ADXP 1.0
 *
 * @return void
 */
function adxp_add_ie_class()
{
	?>
	<script>
		if (-1 !== navigator.userAgent.indexOf('MSIE') || -1 !== navigator.appVersion.indexOf('Trident/')) {
			document.body.classList.add('is-IE');
		}
	</script>
<?php
}
add_action('wp_footer', 'adxp_add_ie_class');

if (!function_exists('wp_get_list_item_separator')) :
	/**
	 * Retrieves the list item separator based on the locale.
	 *
	 * Added for backward compatibility to support pre-6.0.0 WordPress versions.
	 *
	 * @since 6.0.0
	 */
	function wp_get_list_item_separator()
	{
		/* translators: Used between list items, there is a space after the comma. */
		return __(', ', 'adxp');
	}
endif;


/*CUSTOM CODING STARTS*/


/*INCLUDE THEME CSS AND JS STARTS*/

function adxp_enqueue_styles_js()
{

	//CSS	

	wp_enqueue_style('bootstrap-min', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');

	wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');

	wp_enqueue_style('fonts.googleapis', 'https://fonts.googleapis.com/css2?family=Anton&family=Great+Vibes&family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap');

	wp_enqueue_style('parent-style', get_template_directory_uri() . '/assets/css/style.css?v=' . time(), '', '');

	//JS	

	wp_enqueue_script('jquery-front', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array('jquery'), '', true);

	wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true);



	wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'adxp_enqueue_styles_js');

/*INCLUDE THEME CSS AND JS ENDS*/

function the_field_without_wpautop($field_name)
{

	remove_filter('acf_the_content', 'wpautop');

	the_field($field_name);

	add_filter('acf_the_content', 'wpautop');
}

/*BANNER STARTS*/

function banner_image()
{
	global $wp_query;

	$post_id = $wp_query->post->ID;

	$page_banner = get_field('banner_image', $post_id);

	if (!empty($page_banner)) {
		$page_banner_url = $page_banner['url'];
	} else {
		$page_banner_url = get_template_directory_uri() . '/assets/images/no_banner.png';
	}

	return $page_banner_url;
}

/*BANNER ENDS*/


/*BANNER TITLE STARTS*/

function banner_title()
{
	global $wp_query;

	$post_id = $wp_query->post->ID;

	$page_banner_title = get_field('banner_title', $post_id, 'false');

	if (!empty($page_banner_title)) {
		$banner_title = $page_banner_title;
	} else {
		$banner_title = $wp_query->post->post_title;
	}

	return $banner_title;
}

/*BANNER TITLE ENDS*/


/*BANNER CONTENT STARTS*/

function banner_content()
{
	global $wp_query;

	$post_id = $wp_query->post->ID;

	$page_banner_content = get_field('banner_content', $post_id);
	$banner_link = get_field('banner_link', $post_id);

	if (!empty($page_banner_content)) {

		if (!empty($banner_link)) {

			$banner_content = '<a class="text-light" href="' . $banner_link . '">' . $page_banner_content . '<img class="right-arrow" src="' . get_template_directory_uri() . '/assets/img/arrowR.svg" alt="img"> </a>';
		} else {
			$banner_content = $page_banner_content;
		}
	} else {
		$banner_content = '';
	}

	return $banner_content;
}

/*BANNER CONTENT ENDS*/

/*GET INSIGHT CATEGORIES STARTS*/

function get_insight_categories($insight_id)
{
	$insight_services = get_field('services', $insight_id);
	$insight_industry = get_field('industry', $insight_id);
	$services = array();
	$industies = array();
	if ($insight_services) {
		foreach ($insight_services as $insight_ser) {
			$services[] = $insight_ser->post_title;
		}
	}

	if ($insight_industry) {
		foreach ($insight_industry as $insight_ind) {
			$industies[] = $insight_ind->post_title;
		}
	}

	$all_cats = array_merge($services, $industies);
	$insight_cats = implode(' | ', $all_cats);

	return $insight_cats;
}

/*GET INSIGHT CATEGORIES ENDS*/

function wp_get_menu_array($current_menu)
{
	$menu_name = $current_menu;
	$locations = get_nav_menu_locations();
	$menu = wp_get_nav_menu_object($current_menu);
	$array_menu = wp_get_nav_menu_items($menu->term_id);
	$menu = array();
	//print_r($array_menu);
	foreach ($array_menu as $m) {
		if (empty($m->menu_item_parent)) {
			$menu[$m->ID] = array();
			$menu[$m->ID]['ID']      =   $m->ID;
			$menu[$m->ID]['title']       =   $m->title;
			$menu[$m->ID]['description']       =   $m->description;
			$menu[$m->ID]['url']         =   $m->url;
			$menu[$m->ID]['page_id']         =   $m->object_id;
			$menu[$m->ID]['children']    =   array();
		}
	}
	$submenu = array();
	foreach ($array_menu as $m) {
		if ($m->menu_item_parent) {
			$submenu[$m->ID] = array();
			$submenu[$m->ID]['ID']       =   $m->ID;
			$submenu[$m->ID]['title']    =   $m->title;
			$submenu[$m->ID]['description']    =   $m->description;
			$submenu[$m->ID]['url']  =   $m->url;
			$submenu[$m->ID]['page_id']         =   $m->object_id;
			
			$menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
		}
	}
	return $menu;
}
