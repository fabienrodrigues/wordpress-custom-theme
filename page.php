<?php
/*
 * Template Name: Single Article
 * Template Post Type: post, page, product
 */
?>

<?php get_header(); ?>

<div class="main-column">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile;
	endif; ?>
</div>

<?php get_footer(); ?>