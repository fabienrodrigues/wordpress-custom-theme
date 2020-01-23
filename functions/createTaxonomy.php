<?php 
	//create a custom taxonomy
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
?>