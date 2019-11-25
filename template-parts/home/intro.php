
<?php while ( have_posts() ) : the_post(); ?>
    <div id="intro">
        <div class="main-column">
            <h1 data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-delay="0">
                <?php the_field('before_identities'); ?>

                <strong class="typed-strings">
                    <?php 
                    if( have_rows('identities') ):
                        while ( have_rows('identities') ) : the_row();
                            $sub_value = get_sub_field('name');
                            echo '<span>' . $sub_value . '</span>';
                        endwhile;
                    endif; ?>
                </strong>

                <span class="typed-container"></span>,

                <?php echo get_field('after_identities'); ?>
            </h1>
            
            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-delay="100" class="d-none d-sm-block">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
<?php endwhile; ?>