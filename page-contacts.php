<?php
/*
 * Template Name: Page Contacts
 * Template Post Type: post, page, product
 */
?>

<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>

	<ul class="socials">
		<?php foreach (wp_get_nav_menu_items( 'Réseaux sociaux') as $key => $obj): ?>
		<li>
			<a href="<?php echo $obj->url; ?>" title="<?php echo $obj->object_id ?>" class="link">
				<i class="fab fa-<?php echo $obj->title; ?><?php if($obj->title == 'facebook') echo '-f'; ?><?php if($obj->title == 'linkedin') echo '-in'; ?>"></i>
			</a>
		</li>
		<?php endforeach; ?>
	</ul>
<?php endwhile;
endif; ?>


<?php get_footer(); ?>