<?php
/*
 * Template Name: Page 404
 * Template Post Type: post, page, product
 */
?>

<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile;
endif; ?>

<?php 
    $page = get_page_by_path('ils-ont-dit');
    if ($page) {
        $pageComments = $page->ID;
    } else {
        return null;
    }
?>
<div class="main-column">
    <div id="comments">
    <?php if( have_rows('comments', $pageComments) ):
        while ( have_rows('comments', $pageComments) ) : the_row(); ?>
            <div class="item-comment">
                <div class="arrows">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="item-text">
                    <?php the_sub_field('text', $pageComments); ?>
                </div>
                <div class="item-info">
                    <span class="author"><?php the_sub_field('author', $pageComments); ?></span>
                    
                    <a href="<?php the_sub_field('society_url', $pageComments); ?>" target="_blank">
                        <?php the_sub_field('society_name', $pageComments); ?>
                    </a>
                </div>
            </div>
    <?php endwhile;
    endif;
    ?>
    </div>
</div>


<?php get_footer(); ?>