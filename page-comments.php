<?php
/*
 * Template Name: Page Commentaires
 * Template Post Type: post, page, product
 */
?>

<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile;
endif; ?>


<div class="main-column">
    <div id="comments">
    
    <?php if( have_rows('comments') ):
        while ( have_rows('comments') ) : the_row(); ?>
            <div class="item-comment">
                <div class="arrows">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="item-text">
                    <?php the_sub_field('text'); ?>
                </div>
                <div class="item-info">
                    <span class="author"><?php the_sub_field('author'); ?></span>
                    <a href="<?php the_sub_field('society_url'); ?>" target="_blank"><?php the_sub_field('society_name'); ?></a>
                </div>
            </div>
    <?php endwhile;
    endif;
    ?>
    </div>
</div>


<?php get_footer(); ?>