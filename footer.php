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
				<?php if ( get_theme_mod( 'ghps_facebook' ) ) : ?>
					<a href="<?php echo get_theme_mod( 'ghps_facebook' ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/facebook-icon.svg"></a>
				<?php endif; ?>
				<?php if ( get_theme_mod( 'ghps_twitter' ) ) : ?>
					<a href="<?php echo get_theme_mod( 'ghps_twitter' ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/twitter-icon.svg"></a>
				<?php endif; ?>
				<?php if ( get_theme_mod( 'ghps_instagram' ) ) : ?>
					<a href="<?php echo get_theme_mod( 'ghps_instagram' ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/instagram-icon.svg"></a>
				<?php endif; ?>
				</div>
				<h3>Glen Huntly Primary School</h3>
				<p>Grange Road,<br />
				Glen Huntly VIC 3163</p>
				<?php if ( get_theme_mod( 'ghps_phone_number' ) ) : ?>
					<p class="tel"><?php echo get_theme_mod( 'ghps_phone_number' ); ?></p>
				<?php endif; ?>
				<p><a href="mailto:<?php echo get_theme_mod( 'ghps_email_address' ); ?>"><?php echo get_theme_mod( 'ghps_email_address' ); ?></a></p>
			</div>

			<div class="policy-links">
				<div class="inner">
					<p>Privacy Policy &amp; use of cookies</p>
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
