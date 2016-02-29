<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ghps
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="inner">
			<div class="footer-nav">
				<?php dynamic_sidebar( 'footer-nav-1' ); ?>
			</div>
			<div class="contact-info">
				<div class="social-icons">
					<a href="#"><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/images/facebook-icon.svg">Your browser does not support SVGs</object></a>
					<a href="#"><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/images/twitter-icon.svg">Your browser does not support SVGs</object></a>
				</div>
				<h3>Glen Huntly Primary School</h3>
				<p>Grange Road,<br />
				Glen Huntly VIC 3163</p>
				<p class="tel">03&nbsp;9571&nbsp;2931</p>
				<p><a href="mailto:info@glenhuntlyps.vic.edu.au">info@glenhuntlyps.vic.edu.au</a></p>
			</div>
			<div class="policy-links">
				<div class="inner">
					<p>Privacy Policy & use of cookies.</p>
					<p>Terms and Conditions</p>
					<div class="site-info">
						Copyright <?php echo date('Y'); ?> Glenhuntly Primary School. All rights reserved.
					</div><!-- .site-info -->
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
