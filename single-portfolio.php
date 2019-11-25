<?php
/*
 * Template Name: Single Portfolio
 * Template Post Type: post, page, product
 */
?>

<?php get_header(); ?>

<div class="main-column">
    <div class="row">
        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="0" data-aos-anchor-placement="top-bottom">
            <div class="main-content">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
        </div>

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100" data-aos-anchor-placement="top-bottom">
            <?php get_template_part( 'template-parts/project/infos', 'none' ); ?>
        </div>
    </div>
    
    

    <?php get_template_part( 'template-parts/project/pictures', 'none' ); ?>

    <?php get_template_part( 'template-parts/project/logos', 'none' ); ?>
</div>


<?php get_template_part( 'template-parts/project/projects', 'carousel' ); ?>



<?php get_footer();

