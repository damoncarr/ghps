<?php
/**
 * ghps functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ghps
 */

if ( ! function_exists( 'ghps_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ghps_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ghps, use a find and replace
	 * to change 'ghps' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ghps', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );


	set_post_thumbnail_size( 50, 50, true ); // Normal post thumbnails
	
	add_image_size( 'post_hero', 1366, 596, true );
	add_image_size( 'post_hero_half', 683, 298, true );
	add_image_size( 'post_hero_qtr', 341, 149, true );

	add_image_size( 'post_masthead_pic', 793, 444, true );
	add_image_size( 'post_masthead_pic_half', 396, 222, true );
	add_image_size( 'post_masthead_pic_qtr', 198, 111, true );


	add_image_size( 'post_tile', 615, 356, true );
	add_image_size( 'post_tile_half', 307, 128, true );
	add_image_size( 'post_tile_qtr', 154, 64, true );

	add_image_size( 'homepage_highlight', 630, 365, true );	


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'ghps' ),
		'top_header' => __( 'Top header Navigation', 'ghps' ),
		'top_quicklinks' => __( 'Top quicklinks Navigation', 'ghps' ),
		'mobile' => __( 'Mobile Navigation', 'ghps' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ghps_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'ghps_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ghps_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ghps_content_width', 640 );
}
add_action( 'after_setup_theme', 'ghps_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ghps_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ghps' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'footer-nav-1', 'ghps' ),
		'id'            => 'footer-nav-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="footer-nav-container %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Social Sharing',
		'id'            => 'social_sharing',
		'before_widget' => '<div class="social-sharing">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Latest News',
		'id'            => 'latest_news',
		'before_widget' => '<div class="latest-news">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}

add_action( 'widgets_init', 'ghps_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ghps_scripts() {
	wp_enqueue_style( 'ghps-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '20120206', true );

	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20120206', true );	

	wp_enqueue_script( 'ghps-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'ghps-mobnav', get_template_directory_uri() . '/js/jquery.main.js', array(), '20120206', true );

	wp_enqueue_script( 'ghps-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ghps_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


// // Rename '.page-template-template-name-php' to '.page-template-name'.

// function rename_template_body_class( $classes ) {
//   foreach ( $classes as $k =>  $v ) {
//     if ( substr($v, 0, 22) == 'page-template-template' ) {
//       $classes[ $k ] = 'page-' . substr( $v, 14, -4 );
//     }
//   }
//   return $classes;
// }
// add_filter( 'body_class', 'rename_template_body_class' );


// Add to the body_class function
function condensed_body_class($classes) {
    global $post;

    // add a class for the name of the page - later might want to remove the auto generated pageid class which isn't very useful
    if( is_page()) {
        $pn = $post->post_name;
        $classes[] = "page_".$pn;
    }

    // add a class for the parent page name
    if ( is_page() && $post->post_parent ) {
        $post_parent = get_post($post->post_parent);
        $parentSlug = $post_parent->post_name;
        $classes[] = "parent_".$parentSlug;
    }

    // add class for the name of the custom template used (if any)
    $temp = get_page_template();
    if ( $temp != null ) {
        $path = pathinfo($temp);
        $tmp = $path['filename'] . "." . $path['extension'];
        $tn= str_replace(".php", "", $tmp);
        $classes[] = "template_".$tn;
    }

    return $classes;

}

add_filter('body_class', 'condensed_body_class');

// Add custom colours to WYSIWYG editor window
function my_mce4_options( $init ) {
$default_colours = '
	"000000", "Black",
	// "993300", "Burnt orange",
	// "333300", "Dark olive",
	// "003300", "Dark green",
	// "003366", "Dark azure",
	// "000080", "Navy Blue",
	// "333399", "Indigo",
	// "333333", "Very dark gray",
	// "800000", "Maroon",
	// "FF6600", "Orange",
	// "808000", "Olive",
	// "008000", "Green",
	// "008080", "Teal",
	// "0000FF", "Blue",
	// "666699", "Grayish blue",
	// "808080", "Gray",
	"FF0000", "Red",
	// "FF9900", "Amber",
	// "99CC00", "Yellow green",
	// "339966", "Sea green",
	// "33CCCC", "Turquoise",
	// "3366FF", "Royal blue",
	// "800080", "Purple",
	// "999999", "Medium gray",
	// "FF00FF", "Magenta",
	// "FFCC00", "Gold",
	// "FFFF00", "Yellow",
	// "00FF00", "Lime",
	// "00FFFF", "Aqua",
	// "00CCFF", "Sky blue",
	// "993366", "Brown",
	// "C0C0C0", "Silver",
	// "FF99CC", "Pink",
	// "FFCC99", "Peach",
	// "FFFF99", "Light yellow",
	// "CCFFCC", "Pale green",
	// "CCFFFF", "Pale cyan",
	// "99CCFF", "Light sky blue",
	// "CC99FF", "Plum",
	"FFFFFF", "White"
	';
$custom_colours = '
	"0f2b57", "GHPS Blue",
	"9c1737", "GHPS Red",
	"666666", "Light Grey",
	"444444", "Middle Grey",
	"222222", "Dark Grey"
	';
$init['textcolor_map'] = '['.$default_colours.','.$custom_colours.']';
$init['textcolor_rows'] = 6; // expand colour grid to 6 rows
return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');



// //////////////////
// Search custom fields

/**
 * Extend WordPress search to include custom fields
 *
 * http://adambalee.com
 */

/**
 * Join posts and postmeta tables
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }
    
    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;
   
    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );


