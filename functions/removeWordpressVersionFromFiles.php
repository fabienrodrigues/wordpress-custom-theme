<?php 
	/**
	 * REMOVE WORDPRESS VERSION IN FILES NAME
	 */
	// remove version from head
	remove_action('wp_head', 'wp_generator');

	// remove version from scripts and styles
	function shapeSpace_remove_version_scripts_styles($src) {
		if (strpos($src, 'ver=')) {
			$src = remove_query_arg('ver', $src);
		}
		return $src;
	}
	add_filter('style_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);
	add_filter('script_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);
?>