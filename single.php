<?php
/*
 * Template Name: Single Article
 * Template Post Type: post, page, product
 */


wp_enqueue_style( 'blog-article', get_template_directory_uri()  . '/medias/pages/styles/css/blog-article.min.css', array('graphemes-style'),false,'all');
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div id="intro" style="background-image: url(<?php echo get_field('visuel_intro')['url']; ?>);"></div>

	<div id="intro-content">
		<div class="main-column">
			<span class="article-type"><?php the_field('type_article'); ?></span>
			<h1><?php the_title(); ?></h1>
			<p><?php the_field('texte_intro'); ?></p>
		</div>
	</div>

	<?php the_content(); ?>
<?php endwhile; ?>

<?php get_template_part( 'template-parts/content', 'half-blocks'); ?>


<?php get_footer(); ?>