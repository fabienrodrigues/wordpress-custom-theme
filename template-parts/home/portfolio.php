<div id="portfolio">
    <div id="portfolio-content">
        <div id="portfolio-filters">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="desktop-filters">
                            <span data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="0"><button class="filter-btn" type="button" data-filter="all">Tous les projets</button></span>

                            <?php  
                                $categories = get_terms( 'portfolio_categories', 'orderby=ASC&hide_empty=0' );
                                $delay_count_filter = 1;
                                foreach($categories as $category) :
                                    echo '<span data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="' . $delay_count_filter * 50 . '"><button class="filter-btn" type="button" data-filter=".'. $category->slug . '">' . $category->name . '</button></span>';
                                    $delay_count_filter++;
                                endforeach;
                            ?>
                        </div>

                        <div class="mobile-filters">
                            <select name="filter-select" id="filter-select">
                                <option value="all">Tous les projets</option>

                                <?php  
                                    $categories = get_terms( 'portfolio_categories', 'orderby=ASC&hide_empty=0' );
                                    foreach($categories as $category) :
                                        echo '<option value=".'. $category->slug . '">' . $category->name . '</option>';
                                    endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div id="portfolio-list">
            <div class="container-fluid">
                <div class="row">
                    <?php
                    $loop = new WP_Query( array( 'post_type' => 'portfolio', 'order' => 'DESC', 'posts_per_page' => -1 ) );
                    $delay_count = 1;
                    $nbColumns = get_field('nb_columns', $post->ID);
                
                    while ( $loop->have_posts() ) : $loop->the_post();
                    
                        $terms = get_the_terms( $post->ID , 'portfolio_categories' );
                        $taxSlug = '';

                        foreach ( $terms as $term ) {
                            $taxSlug .= $term->slug . ' ';
                        }
                    ?>
                    
                        <a href="<?php the_permalink(); ?>" class="portfolio-item col-6 <?php echo $nbColumns; ?> mix <?php echo $taxSlug; ?>">
                            <div data-aos="fade" data-aos-anchor-placement="top-bottom" data-aos-delay="<?php echo $delay_count * 100; ?>" class="inner-item">
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
                    $toDivide = 0; 
                    switch ($nbColumns) {
                        case 'col-md-12':
                            $toDivide = 1;
                            break;

                        case 'col-md-6':
                            $toDivide = 2;
                            break;

                        case 'col-md-4':
                            $toDivide = 3;
                            break;

                        case 'col-md-3':
                            $toDivide = 4;
                            break;

                        case 'col-md-2':
                            $toDivide = 6;
                            break;

                        case 'col-md-1-5':
                            $toDivide = 5;
                            break;
                    }

                    if($delay_count != 0 || $delay_count != 1) {
                        if ($delay_count % $toDivide == 0) {  
                            $delay_count = 1;
                        } else {
                            $delay_count++;
                        }
                    } else {
                        $delay_count++;
                    }

                    endwhile; wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>