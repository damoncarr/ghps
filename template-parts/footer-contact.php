<?php
/**
 * Template part for displaying contact info footer.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ghps
 */

?>

<div class="contact-footer">
		<div class="inner">
			<h3>Contact Us</h3>
			<div class="phonenumber">
				<h4>Telephone</h4>
				<p><?php echo get_theme_mod( 'ghps_phone_number' ); ?></p>
			</div>
			<div class="school-tour">
				<h4><?php echo get_theme_mod( 'ghps_contactus_col2_heading' ); ?></h4>
				<p><?php echo get_theme_mod( 'ghps_contactus_col2_text' ); ?></p>
				<a href="<?php echo get_theme_mod( 'ghps_contactus_col2_link' ); ?>"><?php echo get_theme_mod( 'ghps_contactus_col2_btntxt' ); ?></a>
			</div>
			<div class="enquiry">
				<h4><?php echo get_theme_mod( 'ghps_contactus_col3_heading' ); ?></h4>
				<p><?php echo get_theme_mod( 'ghps_contactus_col3_text' ); ?></p>
				<a href="<?php echo get_theme_mod( 'ghps_contactus_col3_link' ); ?>"><?php echo get_theme_mod( 'ghps_contactus_col3_btntxt' ); ?></a>
			</div>
		</div>
</header>