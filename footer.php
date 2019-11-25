<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Poil aux dents
 * @since 1.0
 */

?>
	</div><!-- /content -->

	<footer id="footer" role="contentinfo">
		<div id="footer-top" data-aos="fade-up">
			<div class="main-column">
				<?php 
					$post_footer = get_post_by_slug('pre-footer');
					echo $post_footer->post_content;
				?>

				<ul class="socials">
					<?php foreach (wp_get_nav_menu_items( 'Réseaux sociaux') as $key => $obj): ?>
					<li>
						<a href="<?php echo $obj->url; ?>" title="<?php echo $obj->title ?>" class="link" target="_blank">
							<i class="fab fa-<?php echo $obj->title; ?><?php if($obj->title == 'facebook') echo '-f'; ?><?php if($obj->title == 'linkedin') echo '-in'; ?>"></i>
						</a>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>

		<div id="footer-bottom">
			<div class="main-column">
				<p>© Copyright 2019 <a href="<?php echo site_url(); ?>" title="Poil aux Dents">Poil aux Dents</a>, tous droits réservés </p>
				<ul class="links-list">
					<?php foreach (wp_get_nav_menu_items( 'Liens footer') as $key => $obj): ?>
					<li>
						|
						<a href="<?php echo $obj->url; ?>" title="<?php echo $obj->title ?>" class="link">
							<?php echo $obj->title; ?>
						</a>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</footer><!-- #footer -->
</div><!-- /container -->

<?php wp_footer(); ?>


</body>
</html>
