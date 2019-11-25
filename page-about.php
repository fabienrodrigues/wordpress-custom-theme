<?php
/*
 * Template Name: Page A propos
 * Template Post Type: post, page, product
 */
?>

<?php get_header(); ?>

<div class="main-column">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>

<?php get_template_part( 'template-parts/about/numbers', 'none' ); ?>

<?php get_template_part( 'template-parts/about/team', 'none' ); ?>

<?php get_template_part( 'template-parts/about/quotations', 'none' ); ?>

<?php get_footer(); ?>