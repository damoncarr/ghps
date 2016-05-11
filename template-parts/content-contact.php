<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ghps
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="inner">

			<?php the_title( '<h1 class="entry-title page-title">', '</h1>' ); ?>
			
		</div>
	</header><!-- .entry-header -->
	<div class="map">
		<div class="inner">
			<?php $intro_para_value = get_field( "intro_paragraph" );

				if( $intro_para_value ) { ?>
			    <p class="intro-para">
				    <?php echo $intro_para_value; ?>
			   </p>
				<?php } ?>

			<?php $map_code_value = get_field( "map_code" );

				if( $map_code_value ) { ?>
				  <div class="maps map-container">
				    <?php echo $map_code_value; ?>
			    </div>

			<?php } ?>
		</div>
	</div>
	<div class="entry-content">
		<div class="inner flex">
			<div class="col">

				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ghps' ),
						'after'  => '</div>',
					) );
				?>
			</div>

				<?php $map_pdf_value = get_field( "map_pdf_link" );

				if( $map_pdf_value ) { ?>
					<div class="col map-link">
						<h3>School map</h3>
						<p>Download a detailed PDF map showing buildings, parking and amenities</p>
						<a href="<?php echo $map_pdf_value; ?>" ><span>Download</span>GHPS Map</a>
			    </div>
				<?php } ?>

				<?php $contact_form_value = get_field( "contact_form_shortcode" );

				if( $contact_form_value ) { ?>
					<div class="col contact-form-container">
						<h3>Contact the school</h3>
				    <?php echo do_shortcode($contact_form_value); ?>
			    </div>
				<?php } ?>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
