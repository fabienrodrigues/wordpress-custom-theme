<?php 
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
?>