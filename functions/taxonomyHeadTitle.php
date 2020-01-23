<?php 
	// AJOUTE LE TITRE DE LA TAXONOMIES DANS LE TITLE DU HEAD
	function taxonomy_title($title){
		$term = get_queried_object();
		$title_page = get_field('page-title', $term);

		if($term->taxonomy != null) {
			$title = $title_page . ' | Custom theme';
		}
		
		return $title;
	}
	add_filter('aioseop_title','taxonomy_title');
?>