<?php 
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
 ?>