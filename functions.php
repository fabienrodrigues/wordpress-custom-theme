<?php
/**
 * Poil aux dents functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Poil aux dents
 * @since 1.0
 */



 /**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pad_setup() {
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );  
    
}
add_action( 'after_setup_theme', 'pad_setup' );



function admin_custom_styles() {
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
	  */
	add_theme_support('editor-styles');
	add_editor_style( array( 'style-editor.css' ) );

	// Format large
	add_theme_support( 'align-wide' );

}
add_action( 'after_setup_theme', 'admin_custom_styles' );


/**
 * Register custom fonts.
 */
function pad_fonts_url() {
	$fonts_url = '';
	$font_families = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by the font, translate this to 'off'. Do not translate
	 * into your own language.
	 */	
	if ( 'off' !== _x( 'on', 'Poppins font: on or off', 'pad' ) ) {
		$font_families[] = 'Poppins:400,500,700';
	}
	
	if($font_families) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}


function pad_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'pad-fonts', pad_fonts_url(), array(), null );

	// Theme stylesheet.
	wp_enqueue_style( 'pad-style', get_template_directory_uri() . '/dist/main.css' );

	// include components scripts
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/dist/js/main.min.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'pad_scripts' );


/**
 *  REMOVE EMOJIS
 */
function disable_wp_emojicons() {
    // all actions related to emojis
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  
    // filter to remove TinyMCE emojis
    add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}


/**
 * REMOVE WORDPRESS VERSION IN FILES NAME
 */
// remove version from head
remove_action('wp_head', 'wp_generator');

// remove version from rss
add_filter('the_generator', '__return_empty_string');

// remove version from scripts and styles
function shapeSpace_remove_version_scripts_styles($src) {
	if (strpos($src, 'ver=')) {
		$src = remove_query_arg('ver', $src);
	}
	return $src;
}
add_filter('style_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);


// remove unnecessary files from wordpress
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_action( 'wp_head', 'feed_links', 2 );


// Allow post thumbnail
add_theme_support( 'post-thumbnails' );



//create a custom taxonomy name it topics for your posts
function create_project_taxonomy() {
	$labels = array(
		'name' => _x( 'Catégories', 'taxonomy general name' ),
		'singular_name' => _x( 'Catégorie', 'taxonomy singular name' ),
		'search_items' =>  __( 'Recherche de Catégories' ),
		'all_items' => __( 'Toutes les Catégories' ),
		'parent_item' => __( 'Catégorie parente' ),
		'parent_item_colon' => __( 'Catégorie parente:' ),
		'edit_item' => __( 'Editer une Catégorie' ), 
		'update_item' => __( 'Modifier une Catégorie' ),
		'add_new_item' => __( 'Ajouter une nouvelle Catégorie' ),
		'new_item_name' => __( 'Renommer une Catégorie' ),
		'menu_name' => __( 'Catégories' ),
	);    
 
	// Now register the taxonomy 
	register_taxonomy('portfolio_categories','portfolio', array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'categorie' ),
	));
}
add_action( 'init', 'create_project_taxonomy', 0 );


// Our custom post type function
function posttype_portfolio() {
	$labels = array(
		'name' => 'Portfolio',
		'singular_name' => 'Portfolio',
		'add_new' => 'Ajouter un Projet',
		'all_items' => 'Tous les Projets',
		'add_new_item' => 'Ajouter un Projet',
		'edit_item' => 'Modifier un Projet',
		'new_item' => 'Nouveau Projet',
		'view_item' => 'Voir le Projet',
		'search_item' => 'Rechercher un Projet',
		'not_found' => 'Aucun Projet trouvé',
		'not_found_in_trash' => 'Aucun Projet trouvé dans la corbeille',
		'parent_item_colon' => 'Parent Item',
		'featured_image' => 'Miniature portfolio'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_icon' => 'dashicons-media-document',
		'supports' => array(
			'title',
			'editor',
			'thumbnail'
		),
		'exclude_from_search' => false,
	);
	register_post_type('portfolio', $args);
}
add_action('init', 'posttype_portfolio');



// GET SINGLE POST BY SLUG TO SHOW IN FOOTER
function get_post_by_slug($slug){
    $posts = get_posts(array(
            'name' => $slug,
            'post_type' => 'post',
			'post_status' => 'publish',
			'numberposts' => 1
    ));
    
    if(! $posts ) {
        throw new Exception("NoSuchPostBySpecifiedID");
    }

    return $posts[0];
}


function adresses_init() {
	register_sidebar(array());
}
add_action( 'widgets_init', 'adresses_init');



// ajoute les keywords et le title de taxonomies venant de ACF
function taxonomy_keywords($text) {
	$term = get_queried_object();
	$meta_keywords = get_field('keywords', $term);
	
	if($term->taxonomy != null) {
		$text = $meta_keywords;
	}
	
	return $text;
}
add_filter('aioseop_keywords', 'taxonomy_keywords'); 


function taxonomy_title($title){
	$term = get_queried_object();
	$title_page = get_field('page-title', $term);

	if($term->taxonomy != null) {
		$title = $title_page . ' | Poil aux Dents';
    }
    
	return $title;
}
add_filter('aioseop_title','taxonomy_title');