<div class="infos">
    <h2>Infos</h2>
    <h4>
        <span>Catégorie(s) : </span>
        <?php
            $terms = get_the_terms( $post->ID , 'portfolio_categories' );
            $i = 0;
            $len = count($terms);

            foreach ( $terms as $term ) {
                $taxName = $term->name ;
                $term_link = get_term_link( $term );

                if ($i == $len - 1) {
                    echo '<a href="' . $term_link . '" target="_blank">' . $taxName . '</a>';
                } else {
                    echo '<a href="' . $term_link . '" target="_blank">' . $taxName . '</a>, ';
                }

                $i++;
            }
        ?>
    </h4>

    <?php if( have_rows('infos') ):
        while ( have_rows('infos') ) : the_row();
            if(get_sub_field('project-client')) echo '<h4><span>Client : </span>' . get_sub_field('project-client') . '</h4>';
            if(get_sub_field('project-website')) echo '<h4><span>Site : </span><a href="' . get_sub_field('project-website')['url'] . '" target="_blank">' . get_sub_field('project-website')['title'] . '</a></h4>';
            if(get_sub_field('project-facebook')) echo '<h4><span>Facebook : </span><a href="' . get_sub_field('project-facebook')['url'] . '" target="_blank">' . get_sub_field('project-facebook')['title'] . '</a></h4>';
            if(get_sub_field('project-twitter')) echo '<h4><span>Twitter : </span><a href="' . get_sub_field('project-twitter')['url'] . '" target="_blank">' . get_sub_field('project-twitter')['title'] . '</a></h4>';
            if(get_sub_field('project-instagram')) echo '<h4><span>Instagram : </span><a href="' . get_sub_field('project-instagram')['url'] . '" target="_blank">' . get_sub_field('project-instagram')['title'] . '</a></h4>';                        
        endwhile;
    endif; 
    ?>
</div>