<div id="projects-container">
    <div class="main-column">
        <?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'order' => 'DESC', 'post__not_in' => array(get_the_ID()) ) ); ?>

        <div class="carousel projects-wrapper" data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "infinite": false, "responsive": [{ "breakpoint": 1024, "settings": { "slidesToShow": 2, "slidesToScroll": 2}, "breakpoint": 767, "settings": { "slidesToShow": 1, "slidesToScroll": 1, "adaptiveHeight": true}}]}'>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="project-item">
                    <?php
                        $terms = get_the_terms( $post->ID , 'portfolio_categories' );
                        $taxName = '';
                        $taxSlug = '';

                        foreach ( $terms as $term ) {
                            $taxName .= '<li>' . $term->name . '</li>';
                            $taxSlug .= $term->slug . ' ';
                        } 
                    ?>
                    <a href="<?php the_permalink(); ?>" class="link-item" title="<?php the_title(); ?>">
                        <div class="picture">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="content">
                            <h3 class="title"><?php the_title(); ?></h3>
                            <div class="category">
                                <ul>
                                    <?php echo $taxName; ?>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>

        <div class="buttons">
            <a href="<?php echo site_url(); ?>" class="button" title="Mon portfolio"><i class="far fa-eye"></i>Mon portfolio</a>
            <a href="<?php echo site_url() . '/a-propos'; ?>" class="button" title="Qui suis-je ?"><i class="far fa-id-card"></i>Qui suis-je ?</a>
            <a href="<?php echo site_url() . '/services'; ?>" class="button" title="Mes services"><i class="fas fa-tools"></i>Mes services</a>
            <a href="<?php echo site_url() . '/contacts'; ?>" class="button" title="Me contacter"><i class="fas fa-bullhorn"></i>Me contacter</a>
        </div>
    </div>
</div>