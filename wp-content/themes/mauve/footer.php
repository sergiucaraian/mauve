<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mauve
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div id="footer-logo">
			<?php
			if(is_active_sidebar('footer-logo')){
			dynamic_sidebar('footer-logo');
			}
			?>
		</div>
		<div id="footer-contact">
			<?php
			if(is_active_sidebar('footer-contact')){
			dynamic_sidebar('footer-contact');
			}
			?>
		</div>
		<div id="footer-social-media">
			<?php
			if(is_active_sidebar('footer-social-media')){
			dynamic_sidebar('footer-social-media');
			}
			?>
		</div>
		<div id="footer-logo-secondary">
			<?php
			if(is_active_sidebar('footer-logo-secondary')){
			dynamic_sidebar('footer-logo-secondary');
			}
			?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
