<?php
/*
 * Template Name: Taxonomy
 */
?>

<?php get_header(); ?>

<div id="portfolio-list">
    <div class="container-fluid">
        <div class="row">
            <h1>
                <?php
                    $term = get_queried_object();
                    the_field('page-title', $term); 
                ?>
            </h1>

            <?php
                $delay_count = 1; 

                $args = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'portfolio_categories',
                            'field'    => 'term_id',
                            'terms'    => $term->term_id
                        )
                    )
                );
                $project = new WP_Query($args);

                //echo($project->post_count);

                if($project->have_posts()):
                    while ( $project->have_posts()): $project->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="portfolio-item col-6 col-md-1-5">
                            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="<?php echo $delay_count * 100; ?>" class="inner-item">
                                <div class="picture">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="hover">
                                    <span class="title"><?php the_title(); ?></span>
                                    <div class="text">
                                        <?php the_field('thumbnail_text'); ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php 
                    if($delay_count != 0 || $delay_count != 1) {
                        if ($delay_count % 4 == 0) {  
                            $delay_count = 1;
                        } else {
                            $delay_count++;
                        }
                    } else {
                        $delay_count++;
                    }
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>