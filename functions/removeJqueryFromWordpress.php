// REMOVE JQUERY FROM wp-includes/
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_enqueue_script('jquery');
}


// SI ON LAISSE LE JQUERY DE WORDPRESS, IL FAUT AJOUTER CA DANS LE HEADER <script>var $ = jQuery;</script>
// SUPPRIMER L'IMPORT DE JQUERY DANS MAIN.JS