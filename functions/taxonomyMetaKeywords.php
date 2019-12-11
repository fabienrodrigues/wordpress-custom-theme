// ajoute les meta-keywords venant de ACF pour une taxonomy
function taxonomy_keywords($text) {
	$term = get_queried_object();
	$meta_keywords = get_field('keywords', $term);
	
	if($term->taxonomy != null) {
		$text = $meta_keywords;
	}
	
	return $text;
}
add_filter('aioseop_keywords', 'taxonomy_keywords'); 