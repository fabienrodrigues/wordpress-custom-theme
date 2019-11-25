<?php
/*
 * Template Name: Page Services
 * Template Post Type: post, page, product
 */
?>

<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile;
endif; ?>


<?php get_template_part( 'template-parts/services/svgs', 'none' ); ?>

<?php get_template_part( 'template-parts/services/keysteps', 'none' ); ?>


<?php get_footer(); ?>