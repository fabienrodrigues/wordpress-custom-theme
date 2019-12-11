<?php
/*
 * Template Name: Single Article
 * Template Post Type: post, page, product
 */

?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>


<?php get_footer(); ?>