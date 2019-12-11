<?php
/**
 * Custom theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Custom theme
 * @since 1.0
 */



 /**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function custom_setup() {
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );  
    
}
add_action( 'after_setup_theme', 'custom_setup' );



function admin_custom_styles() {
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
	  */
	add_theme_support('editor-styles');
	add_editor_style( array( get_template_directory_uri() . '/dist/style-editor.css' ) );

	// Format large
	add_theme_support( 'align-wide' );

}
add_action( 'after_setup_theme', 'admin_custom_styles' );


/**
 * Register custom fonts.
 */
function custom_fonts_url() {
	$fonts_url = '';
	$font_families = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by the font, translate this to 'off'. Do not translate
	 * into your own language.
	 */	
	if ( 'off' !== _x( 'on', 'Poppins font: on or off', 'custom' ) ) {
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


/**
 * Register custom scripts and styles.
 */
function custom_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'custom-fonts', custom_fonts_url(), array(), null );

	// Theme stylesheet.
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/dist/main.css' );

	// include components scripts
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/dist/main.min.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );


/**
 *  REMOVE EMOJIS
 */
include('functions/removeEmojis.php');



// REMOVE WORDPRESS VERSION IN FILES NAME
include('functions/removeWordpressVersionFromFiles.php');


// REMOVE UNNECESSARY FILES FROM WORDPRESS
include('functions/wpa-clean-header.php');


// REMOVE JQUERY FROM wp-includes/
include('functions/removeJqueryFromWordpress.php');


// Allow post thumbnail
add_theme_support( 'post-thumbnails' );


//create a custom taxonomy name
include('functions/createTaxonomy.php');


// Our custom post type function
include('functions/createCustomPostType.php');


// GET SINGLE POST BY SLUG TO SHOW IN FOOTER
include('functions/getPostBySlug.php');


function adresses_init() {
	register_sidebar(array());
}
add_action( 'widgets_init', 'adresses_init');



// AJOUTE LES META-KEYWORDS VENANT DE ACF POUR UNE TAXONOMY
include('functions/taxonomyMetaKeywords.php');


// AJOUTE LE TITRE DE LA TAXONOMIES DANS LE TITLE DU HEAD
include('functions/taxonomyHeadTitle.php');