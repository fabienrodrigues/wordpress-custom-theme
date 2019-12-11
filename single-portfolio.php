<?php
/*
 * Template Name: Single Portfolio
 * Template Post Type: post, page, product
 */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; ?>


<?php get_template_part( 'template-parts/project/projects', 'carousel' ); ?>



<?php get_footer();

